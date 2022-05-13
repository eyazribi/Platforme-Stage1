<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FailedJobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'connection' => $this->faker->connection(),
            'queue' => $this->faker->queue(),
            'payload' => $this->faker->payload(),
            'exception' => $this->faker->exception(),
            'failed_at' => $this->faker->failed_at(),

        ];
    }
}
