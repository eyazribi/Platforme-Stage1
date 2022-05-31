<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
use App\Models\OffreStage;
use App\Models\Type_stage;
use session;
use Hash;
use DB;

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



      public function list_off($id) {
        $val = OffreStage::find($id);
        $comp = OffreStage::where('companies_id', '=', session('loginId')) -> get();
  dd($comp);
        return view('companies.edit_off',
          [
            'company' => $comp
          ]
        );
      }

    public function store_off() {
      $data = request() -> validate(
        [
            'job_title' => 'required|min:5',
            'job_paid' => 'required',
            'tags' => 'required|min:1',
            'description' => 'required|min:10',

        ]
      );

      $val = new OffreStage();

      $val -> job_title = $data['job_title'];
      $val -> job_paid = $data['job_paid'];
      $val -> tags = $data['tags'];
      $val -> description = $data['description'];
      $val -> companies_id = session('loginId');
      $val -> save();
      $h = OffreStage::all();
      $x = count($h);
      $id_offre_stage = $h[$x - 1]['id'];
      $all_type_stage = Type_stage::all();
      for ($i= 0; $i < count($all_type_stage); $i++) {
        DB::table('offre_type_nbss') -> insert(
          [
            'offre_stages_id' => $id_offre_stage,
            'type_stages_id' => $all_type_stage[$i]['id'],
            'nb' => request() -> all()['stage'.$all_type_stage[$i]['id']]
          ]
        );
      }
      return redirect('/company');
    }

    public function login_company() {
      return view('companies.login');
    }

    public function enter_company() {
      $data = request() -> validate(
        [
          'email' => 'required|email',
          'password' => 'required|min:6'
        ]
      );
      $comp = Company::where('email', 'like', $data['email']) -> first();

      if ($comp) {
        if (Hash::check($data['password'], $comp['password'])) {
          request() -> session() -> put([
            'loginId' => $comp['id'],
             'nom' => $comp['nom'],
             'session_id' => 1
           ]
           );
          return redirect('/company');
        } else {
            return back() -> withErrors(['password' => 'le mot de passe est incorrect']);
        }
      } else {
        return back() -> withErrors(['email' => 'l\'email est incorrect']);
      }
    }

    public function logout() {
      request()->session()->invalidate();
      return redirect('/company');
    }

    public function edit($id)
    {
        $off = OffreStage::find($id);
        return view('modifier-off', compact('offre_stages'));
    }
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
          'job_title' => 'required|min:5',
          'job_paid' => 'required',
          'tags' => 'required|min:1',
          'description' => 'required|min:10',
        ]);
        $offre = OffreStage::find($id);
        // Getting values from the blade template form
        $offre->job_title =  $request->get('job_title');
        $offre->job_paid = $request->get('job_paid');
        $stock->tags = $request->get('tags');
        $stock->save();

        return redirect('/list-off')->with('success', 'offre  updated.');
    }
    public function destroy($id)
    {
        $offre = OffreStage::find($id);
        $offre->delete();

        return redirect('/list-off')->with('success', 'offre removed.');
    }

    public function add_off() {
      $val = Type_stage::all();
      return view('add-off',
      [
        'stages' => $val
      ]);
    }

    public function liste() {
      if(session() -> has('loginId') && session() -> all()['session_id'] == 1) {
        $val = DB::table('companies') -> join('offre_stages', 'offre_stages.companies_id', 'companies.id')
         -> join('offre_type_nbss', 'offre_type_nbss.offre_stages_id', 'offre_stages.id')
          -> join('type_stages', 'type_stages.id', 'offre_type_nbss.type_stages_id') ->
          where('companies.id', '=', session('loginId')) -> get();
         return view('companies.liste_offre',
       [
         'liste' => $val
       ]
       );
      } else {
        return redirect('/comapany');
      }
    }

    public function affiche_detail() {
      $val = DB::table('companies') -> join('offre_stages', 'offre_stages.companies_id', 'companies.id')
       -> join('offre_type_nbss', 'offre_type_nbss.offre_stages_id', 'offre_stages.id')
        -> join('type_stages', 'type_stages.id', 'offre_type_nbss.type_stages_id') ->
        where('companies.id', '=', session('loginId')) -> get();
      return view('companies.affiche_detail_offre',
    [
      'liste' => $val
    ]);
    }

    public function update_detail($id) {
        $val = DB::table('offre_stages')
         -> join('offre_type_nbss', 'offre_type_nbss.offre_stages_id', 'offre_stages.id')
          -> join('type_stages', 'type_stages.id', 'offre_type_nbss.type_stages_id') ->
          where('offre_stages.id', '=', $id) -> get();
      return view('companies.update_detail_offre',
      [
        'liste' => $val
      ]
    );
    }

    public function update_offre($id) {
      $data = request() -> validate([
        'job_title' => 'required|min:5',
        'job_paid' => 'required',
        'tags' => 'required|min:1',
        'description' => 'required|min:10',
      ]);

      $val = DB::table('offre_stages') ->
        where('offre_stages.id', '=', $id) -> update(
          [
            'offre_stages.job_title' => $data['job_title'],
            'offre_stages.job_paid' => $data['job_paid'],
            'offre_stages.tags' => $data['tags'],
            'offre_stages.description' => $data['description']
          ]
        );

        $val1 = DB::table('offre_type_nbss') -> where('offre_stages_id', '=', $id) -> get();
        for($i = 0; $i < count($val1); $i++) {
          DB::table('offre_type_nbss') -> where('offre_stages_id', '=', $id)
          -> where('type_stages_id', '=' , $val1[$i] -> type_stages_id)
          -> update(['nb' => request() -> all()['stage'.$val1[$i] -> type_stages_id]]);
        }
      return redirect('/company/liste_offre');
    }

    public function delete_Offre($id) {
      $val = OffreStage::find($id);
      $val -> delete();
      return back();
    }
    /*
    -> update(['nb' => request() -> all()['stage'.$val1[$i] -> type_stages_id]])
    ->
   where('type_stages_id', '=', $val1 -> get()[$i]['type_stages_id']);
    */
}
