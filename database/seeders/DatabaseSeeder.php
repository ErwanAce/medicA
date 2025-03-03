<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            SpecialtiesTableSeeder::class,
            DoctorsTableSeeder::class,
            DoctorAvailabilitiesTableSeeder::class,
        ]);
    }
}