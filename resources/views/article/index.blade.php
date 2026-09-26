<x-layout>
    <div style="max-width: 1200px; margin: 0 auto; padding: 20px; font-family: sans-serif;">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #ffc107; font-size: 36px; font-weight: bold; margin-bottom: 10px;">Tutti gli Articoli</h1>
            <p style="color: #a8aeb4; font-size: 18px;">Gestisci i contenuti del tuo blog in tempo reale</p>
        </div>

        @if(session('success'))
            <div style="background-color: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 6px; text-align: center; font-weight: bold; margin-bottom: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                {{ session('success') }}
            </div>
        @endif

        <div style="display: flex; flex-wrap: wrap; gap: 25px; justify-content: center;">
            @foreach($articles as $article)
                <div style="background-color: #2c3034; border: 1px solid #ffc107; border-radius: 12px; padding: 25px; width: 100%; max-width: 350px; box-shadow: 0 8px 20px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h3 style="color: #ffc107; margin-top: 0; margin-bottom: 10px; font-size: 22px; font-weight: bold;">{{ $article->title }}</h3>
                        <h5 style="color: #adb5bd; margin-bottom: 15px; font-style: italic; font-weight: normal; font-size: 15px;">{{ $article->subtitle }}</h5>
                        <p style="color: #ffffff; line-height: 1.6; font-size: 15px; margin-bottom: 20px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ $article->body }}</p>
                    </div>
                    
                    <!-- Bottoni di azione del CRUD disposti su una riga ordinata -->
                    <div style="display: flex; justify-content: space-between; gap: 10px; margin-top: 15px;">
                        <a href="{{ route('article.show', compact('article')) }}" style="background-color: transparent; border: 1px solid #0dcaf0; color: #0dcaf0; padding: 8px 12px; border-radius: 6px; font-weight: bold; text-decoration: none; text-align: center; flex-grow: 1; font-size: 14px;">Vedi</a>
                        <a href="{{ route('article.edit', compact('article')) }}" style="background-color: #ffc107; border: none; color: #212529; padding: 8px 12px; border-radius: 6px; font-weight: bold; text-decoration: none; text-align: center; flex-grow: 1; font-size: 14px;">Modifica</a>
                        
                        <form action="{{ route('article.destroy', compact('article')) }}" method="POST" style="margin: 0; flex-grow: 1;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #dc3545; border: none; color: white; padding: 8px 12px; border-radius: 6px; font-weight: bold; width: 100%; cursor: pointer; font-size: 14px;">Elimina</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
