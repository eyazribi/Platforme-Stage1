<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EtudiantSkillsNiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EtudiantSkills::factory(20)
        ->count(10)
        ->create();
    }
}
