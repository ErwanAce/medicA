<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
       
        // Nombre total de patients
        $totalPatients = Patient::count();

        // Nombre total de médecins
        $totalDoctors = Doctor::count();

        // Nombre de nouvelles inscriptions (moins de 7 jours)
        $oneWeekAgo = Carbon::now()->subWeek();
        $newRegistrations = User::where('created_at', '>=', $oneWeekAgo)->count();

        // Nombre de comptes suspendus (supposons qu'un champ 'status' existe avec 'suspended' comme valeur)
        //$suspendedAccounts = User::where('status', 'suspended')->count();
        $patients = Patient::withCount('appointments')->paginate(10);
        $doctors = Doctor::withCount('appointments')->paginate(10);
        return view('dashboard.admin', compact('totalPatients', 'totalDoctors', 'newRegistrations', 'patients', 'doctors'));
    }
}
