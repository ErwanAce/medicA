<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Models\DoctorAvailability;
use App\Models\Appointment;


class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function error404()
    {
        return view('pages.404');
    }

    public function error500()
    {
        return view('pages.500');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function appointmentView($id) 
    {
        if (!session()->has('id')) { 
            return redirect()->route('login'); 
        }

        // Récupérer le docteur et sa spécialité
        $doctor = Doctor::with('specialty', 'user')->findOrFail($id);

        return view('pages.appointment', compact('doctor'));
    }

    public function appointment(Request $request) 
    {
        // Vérifie si l'utilisateur est connecté
        if (!session()->has('id')) {
            return redirect()->route('login')->withErrors(['email' => 'Veuillez vous connecter.']); 
        }

        // Validation des données du formulaire
        $request->validate([
            'doctor' => 'required|exists:doctors,id',
            'date' => 'required|date',
            'phone' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Récupération de l'utilisateur actuellement connecté
        $userId = session()->get('id');
        $patient = Patient::where('user_id', $userId)->first();

        // Vérifier si le patient existe
        if ($patient) {
            $patientId = $patient->id;
        } else {
            return redirect()->route('home')->withErrors(['error' => 'Patient non trouvé.']);
        }

        // Récupération de l'ID du docteur
        $doctorId = $request->input('doctor');
        
        // Récupération de la date du rendez-vous
        try {
            $appointmentTime = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d H:i:s');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Format de date invalide');
        }

        // Création du rendez-vous
        $appointment = Appointment::create([
            'patient_id' => $patientId,
            'doctor_id' => $doctorId,
            'appointment_time' => $appointmentTime,
            'message' => $request->input('message'),
            'status' => 'pending',
        ]);

        // Instanciation de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Paramètres SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'medicaapp226@gmail.com';
            $mail->Password = 'emfkwjhkfgbfnrgs';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Expéditeur et destinataire
            $mail->setFrom('medicaapp226@gmail.com', 'medicaApp');
            $mail->addAddress(session()->get('email'));

            // Contenu du mail
            $mail->isHTML(true);
            $mail->Subject = 'Reservation pour rendez-vous';
            $mail->Body = "Bonjour, votre rendez-vous a été confirmé avec success pour la date du <strong>$appointmentTime</strong><br><br>Veuillez respecter la date du rendez-vous s'il vous plait merci";

            // Envoi de l'email
            $mail->send();

            return redirect()->route('home')->with('success', 'Rendez-vous réservé avec succès!');
        } catch (Exception $e) {
            return response()->json(['message' => 'Erreur lors de l\'envoi de l\'email: ' . $mail->ErrorInfo], 500);
        }    
    }

    public function listDoctors()
    {
        // Tous les docteurs avec leur spécialité
        $doctors = Doctor::with('user', 'specialty')->get();

        return view('pages.list-doctors', compact('doctors'));
    }

    public function agenda($id)
    {
        // Récupérer le docteur avec ses disponibilités
        $doctor = Doctor::with('availabilities', 'user')->findOrFail($id);

        // Récupérer les disponibilités du docteur triées par start_time
        $horaires = DoctorAvailability::where('doctor_id', $id)
            ->orderBy('start_time')
            ->get();

        // Définition des jours de la semaine pour s'assurer de l'ordre
        $joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

        // Tableau des disponibilités organisées
        $horairesParHeure = [];

        foreach ($horaires as $horaire) {
            // Formatter l'horaire sous forme "HH:mm - HH:mm"
            $heureFormatted = date('H:i', strtotime($horaire->start_time)) . ' - ' . date('H:i', strtotime($horaire->end_time));

            // Initialiser la ligne si elle n'existe pas
            if (!isset($horairesParHeure[$heureFormatted])) {
                $horairesParHeure[$heureFormatted] = array_fill_keys($joursSemaine, '<h3 style="color: rgba(0, 0, 0, 0);">NDisp</h3>'); // Associer chaque jour à une valeur vide
            }

            // Placer "✅ Disponible" au bon jour (directement avec la clé jour)
            if (in_array($horaire->day_of_week, $joursSemaine)) { // Vérifier que la valeur est correcte
                $horairesParHeure[$heureFormatted][$horaire->day_of_week] = "<h3>✅ Disponible</h3>";
            }
        }

        //dd($horairesParHeure);
        //dd($doctor);

        return view('pages.agenda', ['doctor' => $doctor, 'horairesParHeure' => $horairesParHeure]);
    }

    public function doctorInfo($id)
    {
        // Récupérer les infos du docteur
        $doctor = Doctor::with('availabilities')->findOrFail($id);

        // Récupérer les disponibilités du docteur
        $horaires = DoctorAvailability::where('doctor_id', $id)->get();

        // Définition des jours de la semaine
        $joursSemaine = [
            'Lundi' => 1,
            'Mardi' => 2,
            'Mercredi' => 3,
            'Jeudi' => 4,
            'Vendredi' => 5,
            'Samedi' => 6,
            'Dimanche' => 7
        ];

        // Initialisation du tableau des horaires
        $horairesParJour = [];

        foreach ($horaires as $horaire) {
            // Vérifier que le jour existe bien dans la liste
            if (!isset($joursSemaine[$horaire->day_of_week])) {
                continue; // Ignorer les valeurs incorrectes
            }

            // Récupérer le chiffre correspondant au jour
            $jourChiffre = $joursSemaine[$horaire->day_of_week];

            // Formater l'heure
            $heureFormatted = date('H:i', strtotime($horaire->start_time)) . ' - ' . date('H:i', strtotime($horaire->end_time));

            // Stocker les horaires
            $horairesParJour[$jourChiffre][] = $heureFormatted;
        }

        // Trier les jours en fonction de leur valeur numérique
        ksort($horairesParJour);

        // Reformater le tableau final avec les jours en texte
        $horairesFinal = [];
        foreach ($horairesParJour as $jourChiffre => $heures) {
            $jourTexte = array_search($jourChiffre, $joursSemaine);
            $horairesFinal[$jourTexte] = implode(', ', $heures);
        }

        //dd($horairesFinal);

        return view('pages.doctor-info', compact('doctor', 'horairesFinal'));
    }

    public function sendEmail(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Récupération des données du formulaire
        $userEmail = $request->email;
        $subject = $request->subject;
        $body = nl2br(htmlspecialchars($request->message)); // Sécurisation du message

        // Instanciation de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Paramètres SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Hôte Gmail
            $mail->SMTPAuth = true; // Authentification SMTP
            $mail->Username = 'medicaapp226@gmail.com'; // Ton adresse Gmail
            $mail->Password = 'emfkwjhkfgbfnrgs'; // Ton mot de passe d'application Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Sécurisation de la connexion
            $mail->Port = 587; // Port pour TLS

            // Expéditeur et destinataire
            $mail->setFrom('medicaapp226@gmail.com', 'medicaApp'); // L'adresse de l'expéditeur
            $mail->addAddress($userEmail); // L'utilisateur reçoit le mail

            // Contenu du mail
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = "<p>$body</p>";

            // Envoi du mail
            if ($mail->send()) {
                return redirect()->route('mail-success')->with('success', 'message envoyé avec succès!');
            } else {
                return redirect()->route('home')->with('error', 'Le message n\'a pas pu être envoyé. Veuillez réessayer.');
            }
        } catch (Exception $e) {
            return redirect()->route('home')->with('error', "Erreur lors de l'envoi de l'email : " . $mail->ErrorInfo);
        }
    }

    public function mailSuccess()
    {
        return view('pages.mail-success');
    }

    public function pastAppointments()
    {
        // Récupération de l'utilisateur actuellement connecté
        $userId = session()->get('id');
        $patient = Patient::where('user_id', $userId)->first();

        // Vérifier si le patient existe
        if ($patient) {
            $patientId = $patient->id;
        } else {
            return redirect()->route('home')->withErrors(['error' => 'Patient non trouvé.']);
        }

        // Récupérer les rendez-vous passés
        $appointments = Appointment::with('doctor.user')
        ->where('patient_id', $patientId)
        ->whereIn('status', ['completed', 'cancelled'])
        ->orderBy('appointment_time', 'desc')
        ->get();

        //dd($appointments);

        return view('pages.past-appointments', compact('appointments'));
    }

    public function upcomingAppointments()
    {
        // Récupération de l'utilisateur actuellement connecté
        $userId = session()->get('id');
        $patient = Patient::where('user_id', $userId)->first();

        // Vérifier si le patient existe
        if ($patient) {
            $patientId = $patient->id;
        } else {
            return redirect()->route('home')->withErrors(['error' => 'Patient non trouvé.']);
        }

        // Récupérer les rendez-vous passés
        $appointments = Appointment::with('doctor.user')
        ->where('patient_id', $patientId)
        ->whereIn('status', ['pending', 'confirmed'])
        ->orderBy('appointment_time', 'desc')
        ->get();

        return view('pages.upcoming-appointments', compact('appointments'));
    }

    public function appointmentCancel($id)
    {
        // Trouver le rendez-vous par ID
        $appointment = Appointment::findOrFail($id);

        // Mettre à jour le statut du rendez-vous à 'cancelled'
        $appointment->status = 'cancelled';
        $appointment->save();
            
        return redirect()->back()->with('success', 'Rendez-vous annulé avec succès.');
    }

}
