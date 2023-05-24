<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $demandes = [
            ['nom' => 'Dupond', 'prenom' => 'Jean', 'tel' => 123456789, 'date_naissance' => '1980-01-01'],
            ['nom' => 'Martin', 'prenom' => 'Marie', 'tel' => 987654321, 'date_naissance' => '1981-02-02'],
            ['nom' => 'Durand', 'prenom' => 'Paul', 'tel' => 321654789, 'date_naissance' => '1982-03-03'],
        ];

        foreach ($demandes as $demande) {
            \App\Models\Demandes::create($demande);
        }
    }
}
