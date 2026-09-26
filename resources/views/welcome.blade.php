<x-layout>
    <div class="row justify-content-center text-center my-5">
        <div class="col-12 col-md-8 p-5 bg-secondary rounded-4 shadow" style="background-color: #2c3034 !important; border: 2px solid #ffc107;">
            <h1 class="display-3 fw-bold text-warning mb-3">Moviomania Blog</h1>
            <p class="lead text-light mb-4">Benvenuta nella piattaforma definitiva per gestire i tuoi articoli con il sistema CRUD completo.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('article.index') }}" class="btn btn-outline-light px-4 fw-semibold">Esplora Articoli</a>
                <a href="{{ route('article.create') }}" class="btn btn-warning px-4 fw-bold text-dark">Inizia a scrivere</a>
            </div>
        </div>
    </div>
</x-layout>
