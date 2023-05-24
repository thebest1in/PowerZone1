<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    // Create an admin user
    DB::table('users')->insert([
        'nom' => 'el foudali',
        'prenom' => 'imad',
        'role' => 'admin',
        'email' => 'admin@email.com',
        'password' => 'admin',
    ]);

    // Create a regular user
    DB::table('users')->insert([
        'nom' => 'el mansouri ',
        'prenom' => 'ayoube',
        'role' => 'directeur',
        'email' => 'directeur@example.com',
        'password' => 'directeur',
    ]);
        
    DB::table('users')->insert([
        'nom' => 'sadiki ',
        'prenom' => 'ilyass',
        'role' => 'gestionnaire',
        'email' => 'gestionnaire@example.com',
        'password' => 'gestionnaire',
    ]);
    }

    }


