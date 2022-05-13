<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departement::factory(20)
        ->count(10)
        ->create();
    }
}
