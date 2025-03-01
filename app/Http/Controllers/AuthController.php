<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

        // Tentative d'authentification
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            throw ValidationException::withMessages([
                'email' => ['Les identifiants sont incorrects.'],
            ]);
        }

        // Récupération de l'utilisateur authentifié
        $user = Auth::user();

        // Régénération de la session
        $request->session()->regenerate();

        // Stockage des informations de l'utilisateur dans la session
        session()->put('id', $user->id);
        session()->put('nom', $user->name);
        session()->put('prenom', $user->prenom);
        session()->put('email', $user->email);
        session()->put('role', $user->role);

        // Redirection selon le rôle
        switch ($user->role) {
            case 'patient':
                return redirect()->route('home');
            case 'docteur':
                return redirect()->route('dashboard.doctor');
            case 'admin':
                return redirect()->route('dashboard.admin');
        }
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        if (session()->has('user')) {
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
        Auth::logout();

        // Invalider la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Déconnexion réussie.');
    }

}
