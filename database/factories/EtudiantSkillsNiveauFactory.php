<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantSkillsNiveauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'niveau' => $this->faker->word(),
            'nb_years' => $this->faker->nb_years(),
        ];
    }
}
