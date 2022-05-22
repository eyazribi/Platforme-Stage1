<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
use session;
use Hash;

class CompanyController extends Controller
{
    //
    public function index() {
      $val = Etudiant::filter(request(['tags', 'search'])) -> get();
      $val1 = Niveaux::all();
      return view('companies.index',
        [
          'etudiant' => $val,
          'niveaux' => $val1
        ]
      );
    }

    public function show_student($id) {
      $val = Etudiant::find($id);
      return view('companies.show_student', [
        'etudiant' => $val
      ]);
    }

    public function register_company() {
      return view("companies.register");
    }

    public function store_company() {
      $data = request() -> validate(
        [
            'nom' => 'required|min:5',
            'email' => 'required|email|unique:companies,email',
            'lien' => 'required|url',
            'company_size' => 'required|min:1',
            'description' => 'required|min:10',
            'tel' => 'required|numeric|min:10000000|max:99999999',
            'adresse' => 'required|min:5',
            'founded' => 'required|before_or_equal:'.now() -> format('m/d/Y'),
            'password' => 'required|confirmed|min:6'
        ]
      );
      $data['password'] = Hash::make($data['password']);
      $val = new Company();
      $val -> nom = $data['nom'];
      $val -> email = $data['email'];
      $val -> company_size = $data['company_size'];
      $val -> description = $data['description'];
      $val -> tel = $data['tel'];
      $val -> adresse = $data['adresse'];
      $val -> founded = $data['founded'];
      $val -> password = $data['password'];
      $val -> lien = $data['lien'];
      $val -> save();
      return redirect('/company/company_login');
    }
}
