<?php

namespace Database\Seeders;

use App\Models\moniteur;
use Illuminate\Database\Seeder;

class MoniteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $moniteurs = [
            ['nom' => 'Dupont', 'prenom' => 'Jean', 'tel' => '0612345678'],
            ['nom' => 'Martin', 'prenom' => 'Pierre', 'tel' => '0698765432'],
            ['nom' => 'Durand', 'prenom' => 'Marie', 'tel' => '0675341209'],
        ];

        foreach ($moniteurs as $moniteur) {
            \App\Models\moniteur::create($moniteur);


    }
}
}