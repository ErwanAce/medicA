<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_time',
        'message',
        'status',
    ];

    protected $casts = [
        'appointment_time' => 'datetime',
    ];    

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function appointments()
    {
            if ($this->role === 'patient' && $this->patient) {
            return $this->patient->hasMany(Appointment::class, 'patient_id');
        } elseif ($this->role === 'doctor' && $this->doctor) {
            return $this->doctor->hasMany(Appointment::class, 'doctor_id');
        }

        return null;
        
    }

}
