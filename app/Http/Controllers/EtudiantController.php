<?php

namespace App\Http\Controllers;
use App\Models\OffreStage;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use session;
use Hash;
use  DB;

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
      $val2 = DB::table('offre_type_nbss') -> join('type_stages', 'offre_type_nbss.type_stages_id', 'type_stages.id')
      ->where('offre_type_nbss.offre_stages_id', '=', $id) -> get();
      $val3 = DB::table('etudiant_offres') -> where('etudiants_id', '=', session() -> all()['loginId'])
      -> where('offre_stages_id', '=', $id) -> get();
      return view('etudiant.show',
        [
          'stage' => $val,
          'company' => $val1,
          'stage_type' => $val2,
          'bool' => $val3
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
          'niveauxes_id' => 'required',
          'adresse' => 'required|min:3'
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
      $etud -> adresse = $data['adresse'];
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
             'nom' => $etud['nom'],
             'session_id' => 2
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
      if (!$val2) {
        return redirect('/');
      }
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
          'cin' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,cin,'.$id,
          'tel' => 'required|numeric|min:10000000|max:99999999|unique:etudiants,tel,'.$id,
          'adresse' => 'required',
        ]
      );

      if (request() -> all()['tel'] != null || request() -> all()['description'] != null || request() -> all()['date'] != null) {
        $data1 = request() -> validate(
          [
            'date' => 'required|before_or_after:'.now() -> format('m/d/Y'),
            'description' => 'required|min:10',
            'titre' => 'required|min:5'
          ]
        );
      }

      $data['password'] = Hash::make($data['password']);
      if (request() -> hasFile('logo')) {
        $data['logo'] = request() -> file('logo') -> store('etudiants', 'public');
      }
      $val -> update($data);
      return back();
    }
}
