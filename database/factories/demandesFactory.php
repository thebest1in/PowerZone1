<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class demandesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [   'id' => $this->faker->unique()->numberBetween(1, 100),
        'nom' => $this->faker->name(),
        'prenom' => $this->faker->firstName(),
        'tel' => $this->faker->numberBetween(1000000000, 9999999999),
        'date_naissance' => $this->faker->date(),
           
        ];
    }
}
