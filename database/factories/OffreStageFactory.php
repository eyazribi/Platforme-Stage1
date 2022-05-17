<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OffreStageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_title' => $this->faker->jobTitle(),
            'job_paid' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            

        ];
    }
}
