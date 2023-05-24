<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdherentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adherents = [
            ['nom' => 'Dupond', 'prenom' => 'Jean', 'dateNaissance' => '1980-01-01', 'tel' => 123456789, 'num' => 1],
            ['nom' => 'Martin', 'prenom' => 'Marie', 'dateNaissance' => '1981-02-02', 'tel' => 987654321, 'num' => 2],
            ['nom' => 'Durand', 'prenom' => 'Paul', 'dateNaissance' => '1982-03-03', 'tel' => 321654789, 'num' => 3],
        ];

        foreach ($adherents as $adherent) {
            \App\Models\Adherents::create($adherent);
        }
    }
}
