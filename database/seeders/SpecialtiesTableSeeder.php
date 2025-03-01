<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('specialties')->insert([
            ['name' => 'Médecine Générale'],
            ['name' => 'Cardiologie'],
            ['name' => 'Chirurgie Générale'],
            ['name' => 'Infectiologie'],
            ['name' => 'Pédiatrie'],
            ['name' => 'Gynécologie-Obstétrique'],
            ['name' => 'Pneumologie'],
            ['name' => 'Neurologie'],
            ['name' => 'Ophtalmologie'],
            ['name' => 'Dermatologie'],
            ['name' => 'Oto-rhino-laryngologie (ORL)'],
            ['name' => 'Chirurgie Orthopédique'],
        ]);
    }
}