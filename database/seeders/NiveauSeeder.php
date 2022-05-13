<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Niveau::factory(20)
        ->count(10)
        ->create();
    }
}
