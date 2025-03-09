<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Specialty;

class DoctorController extends Controller
{

    public function dashboard()
    {
        // Récupération des données de l'utilisateur depuis la session
        $userId = session('id');
        $userRole = session('role');

        $appointmentsCount = 0;
        $upcomingAppointmentsCount = 0;
        $treatedPatientsCount = 0;
        $patients = collect();

        if ($userRole === 'doctor') {
            // Récupération du médecin associé à l'utilisateur
            $doctor = Doctor::where('user_id', $userId)->first();

            if ($doctor) {
                // Nombre total de rendez-vous
                $appointmentsCount = Appointment::where('doctor_id', $doctor->id)->count();

                // Nombre total de rendez-vous à venir ou aujourd’hui
                $upcomingAppointmentsCount = Appointment::where('doctor_id', $doctor->id)
                    ->whereDate('appointment_time', '>=', now())
                    ->count();

                // Nombre de patients traités sans répétition
                $treatedPatientsCount = Appointment::where('doctor_id', $doctor->id)
                    ->where('status', 'completed')
                    ->distinct('patient_id')
                    ->count();

                // Liste des patients ayant des rendez-vous à venir
                $patients = Appointment::where('doctor_id', $doctor->id)
                    ->with('patient.user')
                    ->whereDate('appointment_time', '>=', now())
                    ->orderBy('appointment_time', 'asc')
                    ->distinct('patient_id')
                    ->paginate(10);
            }
        }

        return view('dashboard.doctor', compact('appointmentsCount', 'upcomingAppointmentsCount', 'treatedPatientsCount', 'patients'));
    }

    public function edit()
    {
        $doctor = Auth::user()->doctor;
        $specialties = Specialty::all();
        return response()->json([
            'doctor' => $doctor,
            'specialties' => $specialties
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'biography' => 'required|string|max:1000',
            'education_level' => 'required|string|max:255',
            'specialty_id' => 'required|exists:specialties,id',
        ]);

        $doctor = Auth::user()->doctor;
        $doctor->update([
            'biography' => $request->biography,
            'education_level' => $request->education_level,
            'specialty_id' => $request->specialty_id,
        ]);

        return response()->json(['success' => 'Profile updated successfully']);
    }
}
