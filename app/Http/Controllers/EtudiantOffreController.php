<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EtudiantOffreController extends Controller
{
    //
    public function accept($id, $id1) {
      DB::table('etudiant_offres') -> where('etudiants_id', '=', $id) -> where('offre_stages_id', '=',$id1)
      -> update(['status' => 1]);
      return back();
    }

    public function decline($id, $id1) {

    }
}
