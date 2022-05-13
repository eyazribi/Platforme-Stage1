<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Formation::factory(20)
        ->count(10)
        ->create();
    }
}
