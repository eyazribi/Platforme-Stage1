<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerssonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personne::factory(20)
        ->count(10)
        ->create();
    }
}
