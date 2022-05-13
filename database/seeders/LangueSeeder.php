<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Langue::factory(20)
        ->count(10)
        ->create();
    }
}
