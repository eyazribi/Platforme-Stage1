<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class etudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $cin = mt_rand(10000000, 99999999);
      $v = mt_rand(1, 3);
        return [
            'nom' => $this -> faker -> name,
            'prenom' => $this -> faker -> lastName,
            'email' => $this -> faker -> unique() -> email,
            'cin' => $cin,
            'tel' => $this -> faker -> unique() -> phoneNumber(),
            'adresse' => $this -> faker -> city(),
            'niveauxes_id' => $v,
            'password' => bcrypt($this -> faker -> text(10))
        ];
    }
}
