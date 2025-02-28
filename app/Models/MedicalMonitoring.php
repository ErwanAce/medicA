<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalMonitoring extends Model
{
    use HasFactory;

    protected $table = 'medical_monitoring';

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'notes',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
