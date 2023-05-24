<?php

namespace Database\Seeders;

use App\Models\Paiement;
use App\Models\paiements;
use Illuminate\Database\Seeder;

class PaiementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paiements = [
            ['numP' => 1, 'dateP' => '2023-05-23', 'montant' => 100, 'num' => 1],
            ['numP' => 2, 'dateP' => '2023-05-24', 'montant' => 200, 'num' => 2],
            ['numP' => 3, 'dateP' => '2023-05-25', 'montant' => 300, 'num' => 3],
        ];

        foreach ($paiements as $paiement) {
            Paiement::create($paiement);
        }
    }
}
