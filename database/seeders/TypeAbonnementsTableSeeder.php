<?php

namespace Database\Seeders;

use App\Models\type_abonnements;
use Illuminate\Database\Seeder;

class TypeAbonnementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type_abonnements = [
            ['nomAb' => 'Abonnement mensuel'],
            ['nomAb' => 'Abonnement trimestriel'],
            ['nomAb' => 'Abonnement semestriel'],
            ['nomAb' => 'Abonnement annuel'],
        ];

        foreach ($type_abonnements as $typeabonnement) {
            type_abonnements::create($typeabonnement);
        }
    }
}
