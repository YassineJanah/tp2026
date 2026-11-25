<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/accueil/{id}',function($id){
//     return "hola messi $id";
// });




// Route::get("/about/{id}/{nom}" ,function($id, $nom){
//     return "num: $id, Nom: $nom";
// })->name('about.index');
// // ----------------------exercice 2-------------------------------

// route::get("/",function(){
//     return view("welcome");
// });
// route::get("/formation",function(){
//     return "formation";
// });

// Route::get("/formation/{id}",function( int $id){
//     return "num stage: $id";
// });

// Route::get("/contact",fn()=>'contact');


// use App\Http\Controllers\FilieresController;
//  Route::get('/', [FilieresController::class, 'index'])->name('acceuil');
// Route::get('/Contact', [FilieresController::class, 'index'])->name('Contact');

// use App\Http\Controllers\FiliereController;
// Route::get('/Filiere', [FiliereController::class, 'index']);
// Route::get('/Filiere/{id}', [FiliereController::class, 'show']);


// use App\Http\Controllers\FiliereController;

// Route::get('/filieres', [FiliereController::class, 'index'])->name('filieres');
// Route::get('/filieres/search', [FiliereController::class, 'search'])->name('filieres.search');
// Route::get('/filieres/{id}', [FiliereController::class, 'show'])->name('filieres.show');
// Route::get('/', [FiliereController::class, 'index'])->name('acceuil');
// Route::delete('/filieres/{id}', [FiliereController::class, 'create'])->name('filieres.create');
// Route::post('/filieres', [FiliereController::class, 'store'])->name('filieres.store');
// Route::put('/filieres/{id}', [FiliereController::class, 'update'])->name('filieres.update');
// Route::delete('/filieres/{id}', [FiliereController::class, 'destroy'])->name('filieres.destroy');

// Route::resource('filieres', FiliereController::class);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\InscriptionController;

Route::get('/', [StagiaireController::class, 'index'])->name('acceuil');

Route::resource('filieres', FiliereController::class);

Route::resource('stagiaires', StagiaireController::class);
Route::resource('inscriptions', InscriptionController::class);




