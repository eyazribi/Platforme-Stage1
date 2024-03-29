<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\OffreStageController;
use App\Http\Controllers\EtudiantOffreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/company/add_off',[CompanyController::class, 'add_off']);
Route::get('/edit-off', function () {
    return view('/edit-off');
});
// student route
Route::get('/', [EtudiantController::class, 'index']);
Route::get('/stage/{id}', [EtudiantController::class, 'show']);
Route::get('/company_propriete/{id}', [EtudiantController::class, 'show_comapny']);
Route::get('/register', [EtudiantController::class, 'register'])  -> middleware('isLogged');
Route::post('/store', [EtudiantController::class, 'store']);
Route::get('/login', [EtudiantController::class, 'login']) -> middleware('isLogged');
Route::post('/enter', [EtudiantController::class, 'enter']) -> middleware('isLogged');
Route::post('/logout', [EtudiantController::class, 'logout']);
Route::get('/modefier', [EtudiantController::class, 'modefier']);
Route::put('/update/{id}', [EtudiantController::class, 'update']) -> middleware('isLogged');
//
// company route
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/edit', [EtudiantController::class, 'edit']); // ?!!!
Route::get('/company/etudiant_properiete/{id}', [CompanyController::class, 'show_student']);
Route::get('/company/register_company', [CompanyController::class, 'register_company']);
Route::get('/company/liste_offre', [CompanyController::class, 'liste']);
Route::post('/company/store_company', [CompanyController::class, 'store_company']);

Route::post('/company/store_off',[CompanyController::class,'store_off']);
Route::get('/company/list_off/{id}',[CompanyController::class,'list_off']);



Route::get('company/company_login', [CompanyController::class, 'login_company']);


Route::post('/company/enter_company', [CompanyController::class, 'enter_company']);
Route::post('/company/logout', [CompanyController::class, 'logout']);
Route::get('/company/poster', [CompanyController::class, 'poster']);
Route::post('/company/add_intern', [CompanyController::class, 'add_intern']);
Route::get('/comapny/affiche_detail_offre/{id}', [CompanyController::class, 'affiche_detail']);
Route::get('/company/update_detail_offre/{id}', [CompanyController::class, 'update_detail']);
Route::put('/company/update_offre/{id}', [CompanyController::class, 'update_offre']);
Route::delete('/company/delte_offre/{id}', [CompanyController::class, 'delete_offre']);

//

// Admin route
Route::get('/admin', [AdminController::class, 'index']);
Route::delete('/admin/supprimer/{id}', [AdminController::class, 'delete_etudiant']);
Route::get('/admin/edit_etudiant/{id}', [AdminController::class, 'edit_etudiant']);
Route::put('/admin/update_etudiant/{id}', [AdminController::class, 'update_etudiant']);


//awards


//
Route::post('/deposer_demande/{id}', [OffreStageController::class, 'demander']);
Route::get('/company/liste_student', [OffreStageController::class, 'liste']);
Route::get('/company/accept_student/{id}/{id1}', [EtudiantOffreController::class, 'accept']);
Route::get('/company/refuse_student/{id}/{id1}', [EtudiantOffreController::class, 'decline']);
