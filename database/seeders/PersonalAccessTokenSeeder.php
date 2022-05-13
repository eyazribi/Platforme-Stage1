<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       PersonalAccessToken::factory(20)
        ->count(10)
        ->create();
    }
}
