<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class paiementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 'numP' => $this->faker->unique()->numberBetween(1, 100),
        'dateP' => $this->faker->date(),
        'montant' => $this->faker->randomFloat(2, 100, 1000),
        'num' => $this->faker->numberBetween(1, 100),
            //
        ];
    }
}
