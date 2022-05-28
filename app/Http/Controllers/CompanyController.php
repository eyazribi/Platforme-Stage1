<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Etudiant;
use App\Models\Niveaux;
use App\Models\OffreStage;
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
          request() -> session() -> put(['loginId' => $comp['id'], 'nom' => $comp['nom']]);
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
}
