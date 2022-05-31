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
          'status' => 0,
          'date_applied' => now()
        ]
      );
      return redirect('/');
    } else {
      return back();
    }
    }
}
