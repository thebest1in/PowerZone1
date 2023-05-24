<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         
         DB::table('annonces')->insert([
            'idAn' => 1,
            'title' => 'tkd',
            'dateDebut' => '2023-05-23',
            'dateFin' => '2023-06-01',
            'contenue' => 'taekwondo ',
        ]);

       
        DB::table('annonces')->insert([
            'idAn' => 2,
            'title' => ' msclt',
            'dateDebut' => '2023-06-01',
            'dateFin' => '2023-07-01',
            'contenue' => 'musculation ',
        ]);

        DB::table('annonces')->insert([
            'idAn' => 3,
            'title' => ' fit',
            'dateDebut' => '2023-05-23',
            'dateFin' => '2023-06-01',
            'contenue' => 'fitness ',
        ]);
    }
}
