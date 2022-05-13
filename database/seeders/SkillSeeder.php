<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::factory(20)
        ->count(10)
        ->create();
    }
}
