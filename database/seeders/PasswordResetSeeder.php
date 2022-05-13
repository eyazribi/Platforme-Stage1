<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PasswordReset::factory(20)
        ->count(10)
        ->create();
    }
}
