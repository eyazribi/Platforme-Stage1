<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;
use App\Models\Company;

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
    }
}
