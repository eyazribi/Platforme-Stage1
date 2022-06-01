<?php

namespace App\Http\Controllers;
use App\Models\OffreStage;
use Illuminate\Http\Request;
use DB;

class OffreStageController extends Controller
{
    //
    public function demander($id) {
      if (session() -> has('loginId') && session() -> all()['session_id'] == 2) {
      DB::table('etudiant_offres') -> insert(
        [
          'etudiants_id' => session() -> all()['loginId'],
          'offre_stages_id' => $id,
          'status' => -1,
          'date_applied' => now(),
          'type_stages_id' => request() -> all()['type_stage']
        ]
      );
      return redirect('/');
    } else {
      return back();
    }
    }

    public function liste() {
      $val = DB::table('companies') -> join('offre_stages', 'offre_stages.companies_id','=','companies.id') -> where('companies.id','=',session() -> all()['loginId'])
      -> get();
      $val2 = DB::table('etudiant_offres') -> join('type_stages', 'type_stages.id', '=','etudiant_offres.type_stages_id')
      -> join('offre_stages', 'offre_stages.id','=', 'etudiant_offres.offre_stages_id')
      -> join('etudiants', 'etudiants.id', '=', 'etudiant_offres.etudiants_id') -> where('offre_stages.companies_id','=',session() -> all()['loginId']) -> get();
      return view('companies.liste_student_demande',
    [
      'offre' => $val,
      'etudiant' => $val2
    ]);
    }
}


/*

-> join('etudiant_offres', 'etudiant_offres.offre_stages_id','=','offre_stages.id')
*/
