<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

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


// Installare Node.js , trovate la guida per l'installazione su Dropbox Paper nella pagina 09 - Laravel (subito prima della vostra documentazione, dopo le installazioni di Laravel)

// Realizzare un portale di prodotti Tech. Dovranno esserci Homepage, una pagina con una lista di Prodotti e la pagina di Dettaglio

// Utilizzare OBBLIGATORIAMENTE la componente layout e la componente navbar (ma siete liberi di utilizzare altre componenti tranquillamente)

// Implementare il Bundling degli assets

// Terminato l'esercizio, clonare il progetto dei propri buddies e svolgere le implementazioni necessarie per far sì che il progetto sia funzionale sul proprio pc 


Route::get('/prodotti', [MyController::class, "showProdotti"])->name("prodotti");

Route::get('/prodotti/{genere}', [MyController::class, "showPerGeneri"])->name("prodotti.genere");

