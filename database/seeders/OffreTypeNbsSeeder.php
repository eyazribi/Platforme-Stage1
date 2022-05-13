<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OffreTypeNbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OffreTypeNbs::factory(20)
        ->count(10)
        ->create();
    }
}
