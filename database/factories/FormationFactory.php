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
            'title' => $this -> faker -> title,
            'start_date' => $this ->faker-> date(),
            'end_date' => $this ->faker-> date(),   
            'description' => $this -> faker -> text, 
            'etudiants_id' => $this -> faker -> numberBetween(0, 100),
        ];
    }
}
