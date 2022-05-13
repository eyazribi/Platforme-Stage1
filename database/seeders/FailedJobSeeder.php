<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FailedJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FailedJob::factory(20)
        ->count(10)
        ->create();
    }
}