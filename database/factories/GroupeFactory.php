<?php

use App\Groupe;
use Faker\Generator as Faker;

$factory->define(Groupe::class, function (Faker $faker) {
    return [
        'nomgroupe' =>$this->faker->word(),
        
    ];
});
