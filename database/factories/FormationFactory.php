<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'start_date' => $this->faker->start_date(),
            'end_date' => $this->faker->end_date(),
            'description' => $this->faker->description(),


        ];
    }
}
