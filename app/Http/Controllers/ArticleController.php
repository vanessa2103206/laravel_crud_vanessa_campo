<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // 1. READ (Index) - Mostra tutti gli articoli
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    // 2. CREATE - Mostra il form per creare un articolo
    public function create()
    {
        return view('article.create');
    }

    // 3. STORE - Salva l'articolo legandolo in automatico all'utente loggato
    public function store(Request $request)
    {
        // Metodo ufficiale Aulab visto nel video: usiamo la relazione hasMany dell'utente connesso
        Auth::user()->articles()->create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo creato e associato al tuo utente con successo!');
    }

    // 4. SHOW - Mostra il dettaglio di un singolo articolo
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    // 5. EDIT - Mostra il form di modifica
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    // 6. UPDATE - Applica le modifiche nel database MySQL
    public function update(Request $request, Article $article)
    {
        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo modificato con successo!');
    }

    // 7. DELETE - Elimina l'articolo dal database
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Articolo eliminato con successo!');
    }
}
