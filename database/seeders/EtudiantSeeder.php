<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etudiant::factory(20)
        ->count(10)
        ->create();
    }
}
