<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


// SPIEGAZIONE ROTTE:

// Rotta di Homepage

Route::get('/', [ArticleController::class,'home' ])->name('home');



// Rotta Indice di tutte le stagioni

Route::get('/details',[ArticleController::class, 'indice'])->name('details.paginaIndice');

// Rotta di dettaglio di una singola stagione(parametro rotta)

Route::get('/details/{id}',[ArticleController::class,'details'])->name('details.paginaDetails');