<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use Illuminate\Routing\RouteAction;

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



Route::get('/',[AproposController::class,'accueil'])->name('accueil');
Route::get('/a-propos-de-nous',[AproposController::class,'a_propos_de_nous'])->name('Apropos');
Route::get('/devenir-un-client',[AproposController::class,'devenir_un_client'])->name('devenir_un_client');
Route::get('/compte-epargne-particuliers',[AproposController::class,'credit_epargne_particuliers'])->name('credit_epargne_particuliers');
Route::get('/produits-epargne',[AproposController::class,'produits_epargne'])->name('produits_epargne');
Route::get('/produits-credit',[AproposController::class,'produits_credit'])->name('produits_credit');
Route::get('/nos-agences',[AproposController::class,'nos_agences'])->name('nos_agences');
Route::get('/notre-institution',[AproposController::class,'notre_institution'])->name('notre_institution');
Route::get('/notre-equipe',[AproposController::class,'notre_equipe'])->name('notre_equipe');
Route::get('/actualites',[AproposController::class,'actualites'])->name('actualites');
Route::get('/temoignages-et-histoires',[AproposController::class,'temoignages'])->name('temoignages');
Route::get('/contact',[AproposController::class,'contact'])->name('contact');
Route::get('/contact', [ContactController::class , 'index'])->name('contact');
Route::post('/contact',[ContactController::class , 'store'])->name('contact.store');
