<x-layout>
    <div style="max-width: 800px; margin: 40px auto; padding: 20px; font-family: sans-serif;">
        
        <div style="background-color: #2c3034; border: 1px solid #0dcaf0; border-radius: 12px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.3);">
            
            <h1 style="color: #ffc107; font-size: 38px; font-weight: bold; margin-top: 0; margin-bottom: 10px;">{{ $article->title }}</h1>
            <h4 style="color: #adb5bd; font-size: 18px; font-style: italic; font-weight: normal; margin-bottom: 25px;">{{ $article->subtitle }}</h4>
            
            <hr style="border: 0; border-top: 1px solid #495057; margin-bottom: 25px;">
            
            <p style="color: #ffffff; line-height: 1.8; font-size: 17px; white-space: pre-line; margin-bottom: 35px;">{{ $article->body }}</p>
            
            <a href="{{ route('article.index') }}" style="background-color: transparent; border: 1px solid #ffc107; color: #ffc107; padding: 10px 20px; border-radius: 6px; font-weight: bold; text-decoration: none; display: inline-block; font-size: 15px; transition: 0.2s;">Torna all'Elenco</a>
            
        </div>

    </div>
</x-layout>
