<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

// Rotta speciale per simulare il login istantaneo di Vanessa e testare la relazione 1-N
Route::get('/test-login', function () {
    // Crea l'utente di prova nel database se non esiste già
    $user = User::firstOrCreate(
        ['email' => 'vanessa@test.it'],
        ['name' => 'Vanessa', 'password' => bcrypt('password')]
    );
    
    // Autentica l'utente nella sessione corrente del browser
    Auth::login($user);
    
    return "Login effettuato con successo come Vanessa! Ora puoi andare a creare l'articolo per testare la relazione.";
});
