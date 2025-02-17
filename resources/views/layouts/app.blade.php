<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Chamados</title>

    {{-- Carregar Bootstrap pela CDN sempre como fallback --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand me-5" href="{{ route('home') }}">Sistema de Chamados</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="{{ route('tickets.index') }}">Chamados</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="{{ route('tickets.create') }}">Novo Chamado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports') }}">Relatórios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    

    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @env('development')
        @vite('resources/js/app.js')
    @endenv

</body>
</html>
