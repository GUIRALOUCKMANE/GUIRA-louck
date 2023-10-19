<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\etudiantController;
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
Route::get('/delete-etudiant/{id}',[etudiantController::class,'delete_etudiant']);
Route::get('/update-etudiant/{id}',[etudiantController::class,'update_etudiant']);
Route::POST('/update/traitement',[etudiantController::class,'update_etudiant_traitement']);
Route::get('/etudiant',[etudiantController::class,'liste_etudiant']);
Route::get('/ajouter',[etudiantController::class,'ajouter_etudiant']);
Route::POST('/ajouter/traitement',[etudiantController::class,'ajouter_etudiant_traitement']);



