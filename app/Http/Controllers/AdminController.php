<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
      return view('Admin.index', [
        'etudiant' => Etudiant::all(),
        'niveaux' => Niveaux::all()
      ]);
    }

    public function delete_etudiant($id) {
      $val = Etudiant::find($id);
      $val -> delete();
      return back();
    }

    public function edit_etudiant($id) {
      $val = Etudiant::find($id);
      return view('Admin.edit_etudiant',
      [
        'etudiant' => $val
      ]);
    }

    public function modefier() {
      $val1 = Company::all();
      $val2 = Etudiant::find(session('loginId'));
      return view('etudiant.edit',
      [
        'classe' => $val1,
        'etudiant' => $val2
      ]);
    }

    public function update_etudiant($id) {
      $val = Etudiant::find($id);
      $data = request() -> validate(
        [
          'nom' => 'required|min:3',
          'prenom' => 'required|min:3',
          'email' => 'required|email|unique:etudiants,email,'.$id,
          'cin' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,cin,'.$id,
          'adresse' => 'required',
        ]
      );
      $val -> update($data);
      return back();
    }
}
