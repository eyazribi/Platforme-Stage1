<?php

namespace App\Http\Controllers;
use App\Models\OffreStage;
use App\Models\Company;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function index() {
      $val = OffreStage::all();
      $val1 = Company::all();
      return view('etudiant.index',
        [
          'stages' => $val,
          'company' => $val1
        ]
      );
    }


}
