<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class activitesFactory extends Factory
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
            'nomAct' => $this->faker->firstName() . ' ' . $this->faker->lastName()


        ];
    }
}
