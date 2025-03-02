<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Patient;
use App\Models\Specialty;

class DoctorController extends Controller
{

    public function dashboard()
{
    $user = auth()->user();

    $appointmentsCount = 0;
    $upcomingAppointmentsCount = 0;
    $treatedPatientsCount = 0;
    $patients = collect();

    if ($user->role === 'doctor' && $user->doctor) {
        // Nombre total de rendez-vous
        $appointmentsCount = $user->doctor->appointments()->count();

        // total de rendez-vous à venir ou aujourd’hui
        $upcomingAppointmentsCount = $user->doctor->appointments()
            ->whereDate('appointment_time', '>=', now())
            ->count();

        // Nombre de patients traités sans répétition
        $treatedPatientsCount = $user->doctor->appointments()
            ->where('status', 'completed')
            ->distinct('patient_id')
            ->count();

            $patients = $user->doctor->appointments()
            ->with('patient.user') // Ensure the relationship is loaded
            ->whereDate('appointment_time', '>=', now()) // Only upcoming appointments
            ->orderBy('appointment_time', 'asc') // Order by date
            ->distinct('patient_id')
            ->paginate(10); // Paginate with 10 items per page




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
