<?php

namespace Database\Seeders;


use Faker\Factory;
use App\Models\Groupe;
use App\Models\moniteur;
use App\Models\activites;
use App\Models\abonnements;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        $this->call([
            AbonnementsTableSeeder ::class,
            activitiesSeeder::class,
            AdherentsTableSeeder::class,
            AnnoncesTableSeeder::class,
            DemandesTableSeeder::class,
            GroupeTableSeeder::class,
            ActivitesMoniteurTableSeeder::class,
            MoniteurTableSeeder::class,
            PaiementsTableSeeder::class,
            TarifTableSeeder::class,
            TypeAbonnementsTableSeeder::class,
            UsersSeeder::class,
            
           
            

            
        ]);
    //   // \App\Models\User::factory(10)->create();
    //     $faker = Factory::create();

    //     for ($i = 0; $i < 20; $i++) {
    //         $activite = new activites();
    //         $groupe = new Groupe();
    //         $moniteur = new moniteur();
    //         $moniteur->nomAct = $faker->word();
    //         $groupe->nomgroupe = $faker->word();
    //         $activite->nomAct = $faker->word();
    //         $activite->save();
    //         $groupe->save();
    //         $abonnements = new abonnements();
    //         $abonnements->num = $faker->numberBetween(1, 100);
    //         $abonnements->dateAbonnement = $faker->date();
    //         $abonnements->idAb = $faker->numberBetween(1, 10);
    //         $abonnements->idgroupe = $faker->numberBetween(1, 10);
    //         $abonnements->save();
    //     }
    //     \App\Models\activites::factory(10)->create();
    //     \App\Models\Groupe::factory(10)->create();
    //     \App\Models\moniteur::factory(10)->create();
    //     \App\Models\abonnements::factory(10)->create();
        
        // factory(abonnements::class, 10)->create();
        // $faker = Factory::create();

    // $activites = factory(activites::class, 20)->create();
    // $groupes = factory(Groupe::class, 20)->create();
    // $moniteurs = factory(moniteur::class, 20)->create();
    // $abonnements = factory(abonnements::class, 20)->create();

        

        // $abonnements = new abonnements();
        // $abonnements->num = $faker->numberBetween(1, 100);
        // $abonnements->dateAbonnement = $faker->date();
        // $abonnements->idAb = $faker->numberBetween(1, 10);
        // $abonnements->idgroupe = $faker->numberBetween(1, 10);
        // $abonnements->save();
        // 'num' =idAb> $this->faker->unique()->numberBetween(1, 100),
        // 'dateAbonnement' => $this->faker->date(),
        // '' => $this->faker->numberBetween(1, 10),
        // 'idgroupe' => $this->faker->numberBetween(1, 10),    
       
    }
    
}
