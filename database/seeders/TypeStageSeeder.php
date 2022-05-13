<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeStage::factory(20)
        ->count(10)
        ->create();
    }
}
