<?php

namespace App\Http\Controllers;
use App\Models\OffreStage;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use session;
use Hash;

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
      $data['password'] = Hash::make($data['password']);
      $etud = new Etudiant();
      $etud -> nom = $data['nom'];
      $etud ->prenom = $data['prenom'];
      $etud -> email = $data['email'];
      $etud -> password = $data['password'];
      $etud -> cin = $data['cin'];
      $etud -> tel = $data['tel'];
      $etud -> niveauxes_id = $data['niveauxes_id'];
      $res = $etud -> save();
      return redirect('/login');
    }

    public function login() {
      return view('etudiant.login');
    }

    public function enter() {
      $data = request() -> validate(
        [
          'email' => 'required|email',
          'password' => 'required|min:6'
        ]
      );
      $etud = Etudiant::where('email', 'like', $data['email']) -> first();
      if ($etud) {
        if (Hash::check($data['password'], $etud['password'])) {
          request() -> session() -> put([
            'loginId' => $etud['id'],
             'nom' => $etud['nom']
           ]);
          return redirect('/');
        } else {
            return back() -> withErrors(['password' => 'le mote de passe est incorrect']);
        }
      } else {
        return back() -> withErrors(['email' => 'l\'email est incorrect']);
      }
    }

    public function logout() {
      if (request()->session() -> has('loginId')) {
        request()->session()->invalidate();
        return redirect('/');
      }
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

    public function update($id) {
      $val = Etudiant::find($id);
      $data = request() -> validate(
        [
          'nom' => 'required|min:3',
          'prenom' => 'required|min:3',
          'email' => 'required|email|unique:etudiants,email,'.$id,
          'password' => 'required|min:6',
          'cin' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,cin,'.$id,
          'tel' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,tel,'.$id,
          'adresse' => 'required',
        ]
      );
      $data['password'] = Hash::make($data['password']);
      if (request() -> hasFile('logo')) {
        $data['logo'] = request() -> file('logo') -> store('etudiants', 'public');
      }
      $val -> update($data);
      return back();
    }
}
