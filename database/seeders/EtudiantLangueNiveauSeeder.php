<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EtudiantLangueNiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EtudiantLangueNiveau::factory(20)
        ->count(10)
        ->create();
        
    }
}
