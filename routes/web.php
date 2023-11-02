<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/etudiant',[EtudiantController::class,'liste_etudiant']);
Route::get('/register',[RegisterController::class,'create']);
Route::get('/update-etudiant/{id}',[EtudiantController::class,'update_etudiant']);
Route::get('/delete-etudiant/{id}',[EtudiantController::class,'delete_etudiant']);
Route::get('/ajouter',[EtudiantController::class,'ajouter_etudiant']);
Route::post('/ajouter/traitement',[EtudiantController::class,'ajouter_etudiant_traitement']);
Route::post('/register',[RegisterController::class,'store']);
Route::post('/update/traitement',[EtudiantController::class,'update_etudiant_traitement']);
