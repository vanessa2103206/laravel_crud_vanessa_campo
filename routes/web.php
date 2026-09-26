<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Rotta per la Homepage gestita dal PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Rotte complete per la gestione del CRUD degli articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articolo/nuovo', [ArticleController::class, 'create'])->name('article.create');
Route::post('/articolo/salva', [ArticleController::class, 'store'])->name('article.store');
Route::get('/articolo/dettaglio/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/articolo/modifica/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/articolo/aggiorna/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/articolo/elimina/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
