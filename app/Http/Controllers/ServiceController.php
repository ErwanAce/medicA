<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
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
        //if (!session()->has('user')) { 
        //    return redirect()->route('login'); 
        //}

        // Récupérer le docteur et sa spécialité
        $doctor = Doctor::with('specialty', 'user')->findOrFail($id);

        return view('pages.appointment', compact('doctor'));
    }

    public function appointment(Request $request) 
{
    // Vérifie si l'utilisateur est connecté
    if (!session()->has('user')) {
        return redirect()->route('login'); 
    }

    // Validation des données du formulaire
    $request->validate([
        'doctor' => 'required|exists:doctors,id',
        'date' => 'required|date',
        'phone' => 'required|string',
        'message' => 'nullable|string',
    ]);

    // Récupération de l'utilisateur actuellement connecté
    $patientId = Auth::id();  // L'ID de l'utilisateur connecté

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

    // Retourner à la vue avec un message de confirmation ou rediriger
    return redirect()->route('home')->with('success', 'Rendez-vous réservé avec succès!');
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

    // Debugging (facultatif)
    //dd($horairesFinal);

        return view('pages.doctor-info', compact('doctor', 'horairesFinal'));
    }

}
