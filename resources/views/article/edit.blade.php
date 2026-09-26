<x-layout>
    <div style="max-width: 600px; margin: 40px auto; background-color: #2c3034; border: 2px solid #ffc107; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); font-family: sans-serif;">
        <h2 style="text-align: center; color: #ffc107; font-weight: bold; margin-bottom: 25px;">Modifica l'Articolo</h2>

        <form action="{{ route('article.update', compact('article')) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #ffc107; font-weight: bold; margin-bottom: 8px; font-size: 16px;">Titolo</label>
                <input type="text" name="title" value="{{ $article->title }}" style="width: 100%; padding: 12px; background-color: #ffffff; border: 1px solid #ced4da; border-radius: 6px; color: #212529; box-sizing: border-box; font-size: 15px;" required>
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #ffc107; font-weight: bold; margin-bottom: 8px; font-size: 16px;">Sottotitolo</label>
                <input type="text" name="subtitle" value="{{ $article->subtitle }}" style="width: 100%; padding: 12px; background-color: #ffffff; border: 1px solid #ced4da; border-radius: 6px; color: #212529; box-sizing: border-box; font-size: 15px;" required>
            </div>
            
            <div style="margin-bottom: 25px;">
                <label style="display: block; color: #ffc107; font-weight: bold; margin-bottom: 8px; font-size: 16px;">Corpo dell'Articolo</label>
                <textarea name="body" rows="5" style="width: 100%; padding: 12px; background-color: #ffffff; border: 1px solid #ced4da; border-radius: 6px; color: #212529; box-sizing: border-box; font-size: 15px; resize: vertical;" required>{{ $article->body }}</textarea>
            </div>
            
            <button type="submit" style="width: 100%; background-color: #198754; color: #ffffff; padding: 14px; border: none; border-radius: 6px; font-weight: bold; font-size: 16px; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">Aggiorna l'Articolo</button>
        </form>
    </div>
</x-layout>
