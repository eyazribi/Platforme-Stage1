<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
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
            'tel' => $this->faker->tel(),
            'company_size' => $this->faker->company_size(),
            'lien' => $this->faker->lien(),
            'description' => $this->faker->description(),
            'founded' => $this->faker->founded(),


        ];
    }
}
