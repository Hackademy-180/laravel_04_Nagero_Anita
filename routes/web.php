<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


// SPIEGAZIONE ROTTE:
// le rotte definiscono il pattern di URL ( indirizzo specifico, e queste sanno cosa mostarre seguendone percorso), 
// URL, indirizzo web completo per trovare una risorsa online(imm., video, pagine, documento pdf, file audio; o qualsiasi altro files) 
// parte d'indirizzo web;   /...  - risorsa che ti fa raggiungere la pagina web
// Rotta di Homepage, tecniche di routing molteplici,
// rotte di base,gruppi di rotte, controller(modello di templade blade) 
// uniform resource identifier URI, risorsa [identificata; e, fornisce un nome o un indirizzo univoco.]- protocollo per raggiungerla, termine specifica risorsa
// differente da URL, modo per raggiungerla; (raggiunge risorsa)



// puoi definire un routing , definiamo una rotta di tipo GET ; mettiamo un nome alle rotte per richiamarle facilmente e poter, usare URL ( CHE PUOI CAMBIARE SOLO QUELLE IN CASO );
// Laravel gestisce anche altre tipo di rotte; per richieste http

Route::get('/', [PagesController::class, 'home'])->name('home');
// Rotta Indice di tutte le stagioni

Route::get('/details',[ArticlesController::class, 'indice'])->name('details.paginaIndice');

// Rotta di dettaglio di una singola stagione(parametro rotta)

Route::get('/details/{id}',[ArticlesController::class,'details'])->name('details.paginaDetails');



// LE Rotte hanno una cache per il routing, aumentando efficienza dell'applicazione. Processo che combina tutte le definizione adf un unico file.
// puoi ripulire la cache con phap artisan:clear 