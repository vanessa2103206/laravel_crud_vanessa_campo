<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviomania CRUD</title>
    <!-- Collegamento Bootstrap ufficiale per rendere visibili i campi di testo -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <!-- Direttiva richiesta da Aulab per caricare i file locali tramite Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white">

    <!-- Navbar standard reattiva con classi native Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 shadow-sm">
      <div class="container">
        <a class="navbar-brand text-warning fw-bold fs-3" href="{{ route('homepage') }}">Moviomania</a>
        <div class="navbar-nav ms-auto flex-row gap-3">
          <a class="nav-link text-white fw-semibold" href="{{ route('article.index') }}">Tutti gli Articoli</a>
          <a class="nav-link text-warning fw-bold border border-warning rounded px-3" href="{{ route('article.create') }}">+ Crea Articolo</a>
        </div>
      </div>
    </nav>

    <!-- Contenitore centrale nativo per il CRUD -->
    <div class="container">
        {{ $slot }}
    </div>

</body>
</html>
