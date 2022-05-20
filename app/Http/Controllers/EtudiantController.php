<?php

namespace App\Http\Controllers;
use App\Models\OffreStage;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
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

    public function register() {
      $val = Niveaux::all();
      return view('etudiant.register',
        [
          'classe' => $val
        ]
      );
    }

    public function store() {
      $data = request() -> validate(
        [
          'nom' => 'required|min:3',
          'prenom' => 'required|min:3',
          'email' => 'required|email|unique:etudiants,email',
          'password' => 'required|min:6|confirmed',
          'cin' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,cin',
          'tel' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,tel',
          'niveauxes_id' => 'required'
        ]
      );
      $data['password'] = bcrypt($data['password']);
      $etud = Etudiant::create($data);
      auth() -> login($etud);
      return redirect('/');
    }
}
