<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->unique()->numberBetween(1, 100),
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->firstName(),
            'role' => $this->faker->randomElement(['admin', 'user']),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
        ];
    }
}
