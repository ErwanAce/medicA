<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['nom' => 'Kaboré', 'prenom' => 'Issouf', 'email' => 'issouf.kabore@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Ouédraogo', 'prenom' => 'Awa', 'email' => 'awa.ouedraogo@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Sanou', 'prenom' => 'Mamadou', 'email' => 'mamadou.sanou@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Tapsoba', 'prenom' => 'Philippe', 'email' => 'philippe.tapsoba@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Traoré', 'prenom' => 'Aïssata', 'email' => 'aissata.traore@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Zongo', 'prenom' => 'Michel', 'email' => 'michel.zongo@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Kaboré', 'prenom' => 'Fatimata', 'email' => 'fatimata.kabore@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Bama', 'prenom' => 'Alain', 'email' => 'alain.bama@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Diallo', 'prenom' => 'Salimata', 'email' => 'salimata.diallo@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Sawadogo', 'prenom' => 'Aboubacar', 'email' => 'aboubacar.sawadogo@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Nikiéma', 'prenom' => 'Justine', 'email' => 'justine.nikiema@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Kinda', 'prenom' => 'Souleymane', 'email' => 'souleymane.kinda@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Coulibaly', 'prenom' => 'Mariam', 'email' => 'mariam.coulibaly@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Ouédraogo', 'prenom' => 'Jean-Baptiste', 'email' => 'jeanbaptiste.ouedraogo@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
            ['nom' => 'Diarra', 'prenom' => 'Yacouba', 'email' => 'yacouba.diarra@example.com', 'password' => Hash::make('123456'), 'role' => 'doctor'],
        ]);
    }
}