<?php

namespace Database\Seeders;

use App\Models\seances;
use Illuminate\Database\Seeder;

class SeancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $seances = [
            ['jour' => 'Lundi', 'heurDebut' => 8.00, 'heurFin' => 9.00, 'idgroupe' => 1, 'codeM' => 1, 'idAct' => 1],
            ['jour' => 'Mardi', 'heurDebut' => 10.00, 'heurFin' => 11.00, 'idgroupe' => 2, 'codeM' => 2, 'idAct' => 2],
            ['jour' => 'Mercredi', 'heurDebut' => 14.00, 'heurFin' => 15.00, 'idgroupe' => 3, 'codeM' => 3, 'idAct' => 3],
            ['jour' => 'Jeudi', 'heurDebut' => 16.00, 'heurFin' => 17.00, 'idgroupe' => 1, 'codeM' => 1, 'idAct' => 1],
            ['jour' => 'Vendredi', 'heurDebut' => 18.00, 'heurFin' => 19.00, 'idgroupe' => 2, 'codeM' => 2, 'idAct' => 2],
            ['jour' => 'Samedi', 'heurDebut' => 9.00, 'heurFin' => 10.00, 'idgroupe' => 3, 'codeM' => 3, 'idAct' => 3],
        ];

        foreach ($seances as $seance) {
            seances::create($seance);
        }
    }
}
