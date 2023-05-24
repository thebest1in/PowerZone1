<?php

namespace Database\Seeders;

use App\Models\Groupe;
use Illuminate\Database\Seeder;

class GroupeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $groupes = [
            ['nomgroupe' => 'Groupe 1', 'idM' => 1],
            ['nomgroupe' => 'Groupe 2', 'idM' => 2],
            ['nomgroupe' => 'Groupe 3', 'idM' => 3],
        ];

        foreach ($groupes as $groupe) {
            Groupe::create($groupe);
        }
    }
}
