<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'title' => $this -> faker -> title,
            'date_award' => $this -> faker -> dateTime,
            'description' => $this -> faker -> text, 
            'etudiants_id' => $this -> faker -> numberBetween(0, 100),

        ];
    }
}
