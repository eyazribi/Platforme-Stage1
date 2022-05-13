<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasswordResetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'token' => $this->faker->token(),
            'created_at' => $this->faker->created_at(),

        ];
    }
}
