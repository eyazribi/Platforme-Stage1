<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AwardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'date_award' => $this ->faker->date(),
            'description' => $this ->faker->sentence(),
        ];
    }
}
