<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;
use App\Models\Company;
use App\Models\Work_experience;
use App\Models\Award;
use App\Models\Formation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // start generate departments
      DB::table('departments') -> insert(
        [
          'nom_department' => 'technologie de l\'informatique'
        ]
      );

      DB::table('departments') -> insert(
        [
          'nom_department' => 'genie electrique'
        ]
      );

      DB::table('departments') -> insert(
        [
          'nom_department' => 'genie mecanique'
        ]
      );

      DB::table('departments') -> insert(
        [
          'nom_department' => 'commerce'
        ]
      );

      DB::table('departments') -> insert(
        [
          'nom_department' => 'genie procedee'
        ]
      );
      // end generate departments
      // start generate niveaux
      DB::table('niveauxes') -> insert(
        [
          'nom_niveau' => 'DSI',
          'department_id' => 1
        ]
      );

      DB::table('niveauxes') -> insert(
        [
          'nom_niveau' => 'RSI',
          'department_id' => 1
        ]
      );

      DB::table('niveauxes') -> insert(
        [
          'nom_niveau' => 'SEM',
          'department_id' => 1
        ]
      );
      // end generate niveaux
      // the beginning of the filling the table type_stage
      DB::table('type_stages') -> insert(
        [
          'nom_stage' => 'stage d\'initiation',
          'start_date' => date('Y-m-d', mktime(0, 0, 0, 10, 1, 2021)),
          'end_date' => date('Y-m-d', mktime(0, 0, 0, 11, 1, 2021)),
          'date_rapport' => date('Y-m-d', mktime(0, 0, 0, 12, 10, 2021))
        ]
      );
      DB::table('type_stages') -> insert(
        [
          'nom_stage' => 'stage de perfectionnement',
          'start_date' => date('Y-m-d', mktime(0, 0, 0, 10, 1, 2021)),
          'end_date' => date('Y-m-d', mktime(0, 0, 0, 11, 1, 2021)),
          'date_rapport' => date('Y-m-d', mktime(0, 0, 0, 12, 10, 2021))
        ]
      );
      DB::table('type_stages') -> insert(
        [
          'nom_stage' => 'stage pfe',
          'start_date' => date('Y-m-d', mktime(0, 0, 0, 3, 1, 2022)),
          'end_date' => date('Y-m-d', mktime(0, 0, 0, 6, 1, 2022)),
          'date_rapport' => date('Y-m-d', mktime(0, 0, 0, 6, 10, 2022))
        ]
      );
      // the end of the filling the table type_stage
      \App\Models\Company::factory() -> count(20) -> create();
      Etudiant::factory() -> count(10) -> create();
      Work_experience::factory() -> count(10) -> create();
      Award::factory()-> count(10) -> create();
      Formation::factory()-> count(10) -> create();
      // start the filling of the table offre_stages
      DB::table('offre_stages') -> insert(
        [
          'job_title' => 'senior laravel developer',
          'job_paid' => false,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'start_date' => date('Y-m-d', mktime(0, 0, 0, 6, 1, 2022)),
          'end_date' => date('Y-m-d', mktime(0, 0, 0, 7, 10, 2022)),
          'companies_id' => mt_rand(1, 20),
          'tags' => 'laravel,spring,html'
        ]
      );
      // end the fillig of the table offre_stages
    }
}
