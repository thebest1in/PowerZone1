<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class abonnementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
         'num' => $this->faker->unique()->numberBetween(1, 100),
         'dateAbonnement' => $this->faker->date(),
         'idAb' => $this->faker->numberBetween(1, 10),
         'idgroupe' => $this->faker->numberBetween(1, 10),
            //
        ];
    }
}
