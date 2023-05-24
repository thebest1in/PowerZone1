<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class moniteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'tel' => $this->faker->phoneNumber(),
        ];
    }
}
