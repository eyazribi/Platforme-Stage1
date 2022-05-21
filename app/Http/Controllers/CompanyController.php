<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;

class CompanyController extends Controller
{
    //
    public function index() {
      $val = Etudiant::all();
      $val1 = Niveaux::all();
      return view('companies.index',
        [
          'etudiant' => $val,
          'niveaux' => $val1
        ]
      );
    }
}