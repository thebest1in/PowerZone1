<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivitesMoniteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $activites_moniteurs = [
            ['codeM' => 1, 'idAct' => 1],
            ['codeM' => 2, 'idAct' => 2],
            ['codeM' => 3, 'idAct' => 3],
        ];

        foreach ($activites_moniteurs as $activite_moniteur) {
            \App\Models\ActivitesMoniteur::create($activite_moniteur);
        }
    }
}
