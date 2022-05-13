<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Award::factory(20)
        ->count(10)
        ->create();
    }
}
