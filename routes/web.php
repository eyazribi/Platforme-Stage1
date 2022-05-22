<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CompanyController;
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
// student route
Route::get('/', [EtudiantController::class, 'index']);
Route::get('/stage/{id}', [EtudiantController::class, 'show']);
Route::get('/company_propriete/{id}', [EtudiantController::class, 'show_comapny']);
Route::get('/register', [EtudiantController::class, 'register'])  -> middleware('isLogged');
Route::post('/store', [EtudiantController::class, 'store']);
Route::get('/login', [EtudiantController::class, 'login']) -> middleware('isLogged');
Route::post('/enter', [EtudiantController::class, 'enter']);
Route::post('/logout', [EtudiantController::class, 'logout']);
Route::get('/modefier', [EtudiantController::class, 'modefier']);
Route::put('/update/{id}', [EtudiantController::class, 'update']);
//
// company route
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/etudiant_properiete/{id}', [CompanyController::class, 'show_student']);
Route::get('/company/register_company', [CompanyController::class, 'register_company']);
Route::post('/company/store_company', [CompanyController::class, 'store_company']);
Route::get('company/company_login', [CompanyController::class, 'login_company']);
Route::post('/company/enter_company', [CompanyController::class, 'enter_company']);
Route::post('/company/logout', [CompanyController::class, 'logout']);
//
