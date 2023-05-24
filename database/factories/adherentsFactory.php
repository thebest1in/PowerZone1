<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class adherentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return ['codeA' => $this->faker->unique()->numberBetween(1, 100),
        'nom' => $this->faker->name(),
        'prenom' => $this->faker->firstName(),
        'dateNaissance' => $this->faker->date(),
        'tel' => $this->faker->numberBetween(1000000000, 9999999999),
        'num' => $this->faker->numberBetween(1, 100),
            //
        ];
    }
}
