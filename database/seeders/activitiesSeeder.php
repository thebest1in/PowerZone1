<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class activitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
         DB::table('activites')->insert([
            'nomAct' => 'taekwondo',
        ]);

        DB::table('activites')->insert([
            'nomAct' => 'Condition pc',
        ]);

        DB::table('activites')->insert([
            'nomAct' => 'musculation',
        ]);
    }
}
