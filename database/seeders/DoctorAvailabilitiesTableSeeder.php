<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorAvailabilitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('doctor_availabilities')->insert([
            // Dr. Issouf Kaboré - Médecin généraliste
            ['doctor_id' => 1, 'day_of_week' => 'Lundi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 1, 'day_of_week' => 'Mercredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 1, 'day_of_week' => 'Vendredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],

            // Dr. Awa Ouédraogo - Médecin généraliste
            ['doctor_id' => 2, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 2, 'day_of_week' => 'Jeudi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 2, 'day_of_week' => 'Samedi', 'start_time' => '10:00:00', 'end_time' => '13:00:00'],

            // Dr. Mamadou Sanou - Médecin généraliste
            ['doctor_id' => 3, 'day_of_week' => 'Lundi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 3, 'day_of_week' => 'Mercredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 3, 'day_of_week' => 'Vendredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],

            // Dr. Philippe Tapsoba - Médecin généraliste
            ['doctor_id' => 4, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 4, 'day_of_week' => 'Jeudi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 4, 'day_of_week' => 'Samedi', 'start_time' => '14:00:00', 'end_time' => '16:00:00'],

            // Dr. Aïssata Traoré - Cardiologue
            ['doctor_id' => 5, 'day_of_week' => 'Lundi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 5, 'day_of_week' => 'Mercredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 5, 'day_of_week' => 'Vendredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],

            // Dr. Michel Zongo - Chirurgien généraliste
            ['doctor_id' => 6, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 6, 'day_of_week' => 'Jeudi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 6, 'day_of_week' => 'Samedi', 'start_time' => '10:00:00', 'end_time' => '13:00:00'],

            // Dr. Fatimata Kaboré - Infectiologue
            ['doctor_id' => 7, 'day_of_week' => 'Lundi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 7, 'day_of_week' => 'Mercredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 7, 'day_of_week' => 'Vendredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],

            // Dr. Alain Bama - Pédiatre
            ['doctor_id' => 8, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 8, 'day_of_week' => 'Jeudi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 8, 'day_of_week' => 'Samedi', 'start_time' => '14:00:00', 'end_time' => '16:00:00'],

            // Dr. Salimata Diallo - Gynécologue-obstétricienne
            ['doctor_id' => 9, 'day_of_week' => 'Lundi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 9, 'day_of_week' => 'Mercredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 9, 'day_of_week' => 'Vendredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],

            // Dr. Aboubacar Sawadogo - Pneumologue
            ['doctor_id' => 10, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 10, 'day_of_week' => 'Jeudi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 10, 'day_of_week' => 'Samedi', 'start_time' => '10:00:00', 'end_time' => '13:00:00'],

            // Dr. Justine Nikiéma - Neurologue
            ['doctor_id' => 11, 'day_of_week' => 'Lundi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 11, 'day_of_week' => 'Mercredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 11, 'day_of_week' => 'Vendredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],

            // Dr. Souleymane Kinda - Ophtalmologue
            ['doctor_id' => 12, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 12, 'day_of_week' => 'Jeudi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 12, 'day_of_week' => 'Samedi', 'start_time' => '14:00:00', 'end_time' => '16:00:00'],

            // Dr. Mariam Coulibaly - Dermatologue
            ['doctor_id' => 13, 'day_of_week' => 'Lundi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 13, 'day_of_week' => 'Mercredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 13, 'day_of_week' => 'Vendredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],

            // Dr. Jean-Baptiste Ouedraogo - ORL
            ['doctor_id' => 14, 'day_of_week' => 'Mardi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 14, 'day_of_week' => 'Jeudi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 14, 'day_of_week' => 'Samedi', 'start_time' => '10:00:00', 'end_time' => '13:00:00'],
            
            // Dr. Yacouba Diarra - Chirurgien orthopédique
            ['doctor_id' => 15, 'day_of_week' => 'Lundi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
            ['doctor_id' => 15, 'day_of_week' => 'Mercredi', 'start_time' => '09:00:00', 'end_time' => '12:00:00'],
            ['doctor_id' => 15, 'day_of_week' => 'Vendredi', 'start_time' => '14:00:00', 'end_time' => '18:00:00'],
        ]);
    }
}
