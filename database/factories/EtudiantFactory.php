<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adresse' => $this->faker->adresse(),
            'tel    ' => $this->faker->tel()

        ];
    }
}
