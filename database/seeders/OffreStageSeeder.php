<?php

namespace Database\Seeders;
use App\Models\OffreStage;
use Illuminate\Database\Seeder;

class OffreStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OffreStage::factory(20)
        ->count(10)
        ->create();
    }
}
