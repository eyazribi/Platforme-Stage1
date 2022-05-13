<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LangueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_langue' => $this->faker->nom_langue(),

        ];
    }
}
