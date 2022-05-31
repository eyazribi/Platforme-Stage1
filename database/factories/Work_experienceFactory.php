<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
class Work_experienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'job_title' => $this -> faker -> title,
            'company' => $this -> faker -> company(),
            'city' => $this -> faker -> city(),
            'start_date' => $this ->faker-> date(),
            'end_date' => $this ->faker-> date(),
            'description' => $this -> faker -> text,
            'etudiants_id' => $this -> faker -> numberBetween(1, 10),


        ];
    }
}
