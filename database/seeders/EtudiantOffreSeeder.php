<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EtudiantOffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EtudiantOffre::factory(20)
        ->count(10)
        ->create();
    }
}
