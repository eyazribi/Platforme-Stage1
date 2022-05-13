<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            OffreStageSeeder::class,
           AwardSeeder::class,
           /*  CompanySeeder::class,
            DepartmentSeeder::class,
            EtudiantLangueNiveauSeeder::class,
            EtudiantOffreSeeder::class,
            EtudiantSkillsNiveauSeeder::class,
            FormationSeeder::class,
            LangueSeeder::class,
            NiveauSeeder::class,
            OffreTypeNbsSeeder::class,
            PersonalAccessTokenSeeder::class,
            PasswordResetSeeder::class,
            SkillSeeder::class,
            TypeStageSeeder::class,
            WorkExperienceSeeder::class,
*/

        
        ]);
    }
}
