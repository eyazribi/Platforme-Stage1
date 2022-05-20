<?php

namespace App\Http\Controllers;
use App\Models\OffreStage;
use App\Models\Company;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function index() {
      $val1 = Company::all();
      return view('etudiant.index',
        [
          'stages' => OffreStage::filter(request(['tags','search'])) -> get(),
          'company' => $val1
        ]
      );
    }

    public function show($id) {
      $val = OffreStage::find($id);
      $val1 = Company::all();
      return view('etudiant.show',
        [
          'stage' => $val,
          'company' => $val1
        ]
      );
    }

    public function show_comapny($id) {
      $val = Company::find($id);
      return view('companies.show',
        [
          'company' => $val
        ]
      );
    }
}
