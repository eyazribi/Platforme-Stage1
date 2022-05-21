<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
class companyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $model = \App\Models\company::class;
     public function definition()
     {
       return [
           'nom' => $this -> faker -> company(),
           'email' => $this -> faker -> unique() -> companyEmail(),
           'tel' => $this -> faker -> unique() -> phoneNumber(),
           'adresse' => $this -> faker -> city(),
           'company_size' => mt_rand(1, 9999),
           "lien" => $this -> faker -> url(),
           'description' => $this -> faker -> text(255),
           'founded' => $this -> faker -> dateTimeBetween(),
           'password' => Hash::make($this -> faker -> text(10))
       ];
    }
}
