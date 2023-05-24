<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbonnementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $abonnements = [
            ['dateAbonnement' => '2023-05-23', 'idAb' => 1, 'idgroupe' => 1],
            ['dateAbonnement' => '2023-05-24', 'idAb' => 2, 'idgroupe' => 2],
            ['dateAbonnement' => '2023-05-25', 'idAb' => 3, 'idgroupe' => 3],
        ];

        foreach ($abonnements as $abonnement) {
            \App\Models\abonnements::create($abonnement);
        }
    }
}
