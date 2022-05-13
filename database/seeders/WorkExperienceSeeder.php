<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkExperience::factory(20)
        ->count(10)
        ->create();
    }
}
