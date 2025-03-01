<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\User;
use App\Models\Patient;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Vérification si l'utilisateur existe et si le mot de passe est correct
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Les identifiants sont incorrects.']);
        }

        // Régénération de la session
        $request->session()->regenerate();

        // Stockage des informations de l'utilisateur dans la session
        session()->put('id', $user->id);
        session()->put('nom', $user->name);
        session()->put('prenom', $user->prenom);
        session()->put('email', $user->email);
        session()->put('role', $user->role);

        // Redirection selon le rôle
        if ($user->role == 'patient') {
            return redirect()->route('home');
        }
    
        if ($user->role == 'doctor') {
            return redirect()->route('home');
        }
    
        if ($user->role == 'admin') {
            return redirect()->route('home');
        }
    }

    public function registerView()
    {
        return view('auth.register');
    }
    
    public function register(Request $request)
    {
        if (session()->has('id')) {
            return redirect()->route('home'); 
        }

        try {
            // Validation
            $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'day' => 'required|numeric|digits:2',
                'month' => 'required|numeric|digits:2',
                'year' => 'required|numeric|digits:4',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|string|max:20',
                'password' => 'required|min:6|confirmed',
            ]);

            // Création de l'utilisateur
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'patient',
            ]);

            // Vérification de la création
            if (!$user) {
                return response()->json(['error' => "Erreur lors de la création de l'utilisateur"], 500);
            }

            // Création du patient
            $patient = Patient::create([
                'user_id' => $user->id,
                'date_of_birth' => $this->combineDateOfBirth($request->day, $request->month, $request->year),
                'phone' => $request->phone,
            ]);

            // Vérification de la création
            if (!$patient) {
                return response()->json(['error' => "Erreur lors de la création du patient"], 500);
            }

            return redirect()->route('login')->with('success', 'Inscription réussie. Veuillez vous connecter.');

        } catch (\Throwable $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
            ], 500);
        }
    }

    private function combineDateOfBirth($day, $month, $year)
    {
        $formattedDay = str_pad($day, 2, '0', STR_PAD_LEFT);
        $formattedMonth = str_pad($month, 2, '0', STR_PAD_LEFT);

        //(année-mois-jour)
        return "{$year}-{$formattedMonth}-{$formattedDay}";
    }

    public function logout(Request $request)
    {
        // Invalider la session et effacer les informations de l'utilisateur
        session()->forget('id');
        session()->forget('nom');
        session()->forget('prenom');
        session()->forget('email');
        session()->forget('role');

        // Invalider la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Déconnexion réussie.');
    }

    public function recup_mdpView()
    {
        return view('auth.recup-password1');
    }

    public function recup_mdp(Request $request) {
        $user = User::where('email', $request->email)->first();
    
        if ($user) {
            // Génération d'un code otp
            $codeOTP = rand(100000, 999999);
    
            PasswordReset::updateOrCreate(
                ['email' => $user->email],
                ['token' => $codeOTP, 'created_at' => now()]
            );
    
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
                $mail->addAddress($user->email);
    
                // Contenu du mail
                $mail->isHTML(true);
                $mail->Subject = 'Recuperation du mot de passe';
                $mail->Body = "Bonjour, <br><br>Entrer le code OTP suivant : <strong>$codeOTP</strong><br><br>Veuillez le changer après connexion.";
    
                // Envoi de l'email
                $mail->send();
    
                return view('auth.recup-password2', ['email' => $user->email])->with('success', 'code OTP envoyé avec succès!');
            } catch (Exception $e) {
                return response()->json(['message' => 'Erreur lors de l\'envoi de l\'email: ' . $mail->ErrorInfo], 500);
            }
        } else {
            return back()->withErrors(['message' => 'Email incorrect.']);
        }
    }

    public function change_mdp(Request $request, $email) 
    {
        $request->validate([
            'codeOTP' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['message' => 'Email incorrect !'], 402);
        }

        // Vérification du code OTP
        $otpRecord = PasswordReset::where('email', $user->email)->first();

        if (!$otpRecord || $otpRecord->token != $request->codeOTP) {
            return response()->json(['message' => 'Code OTP invalide !'], 402);
        }

        // Mise à jour du mot de passe
        $user->password = Hash::make($request->password);
        $user->save();

        // Suppression du code OTP après utilisation
        PasswordReset::where('email', $user->email)->delete();
        return redirect()->route('login')->with('success', 'Mot de passe mis à jour avec succès!');

    }
}