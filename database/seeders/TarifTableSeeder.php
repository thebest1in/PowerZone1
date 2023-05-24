<?php

namespace Database\Seeders;

use App\Models\Tarif;
use Illuminate\Database\Seeder;

class TarifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tarifs = [
            ['idAct' => 1, 'idAb' => 1, 'prixActuel' => 100],
            ['idAct' => 2, 'idAb' => 1, 'prixActuel' => 200],
            ['idAct' => 3, 'idAb' => 1, 'prixActuel' => 300],
            ['idAct' => 1, 'idAb' => 2, 'prixActuel' => 400],
            ['idAct' => 2, 'idAb' => 2, 'prixActuel' => 500],
            ['idAct' => 3, 'idAb' => 2, 'prixActuel' => 600],
        ];

        foreach ($tarifs as $tarif) {
            Tarif::create($tarif);
        }
    }
}
