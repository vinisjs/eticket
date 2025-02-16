<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Meu Site')</title>
    <style>
        .sidebar {
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="d-flex flex-column flex-md-row vh-100">
    <!-- Barra Lateral -->
    <nav id="sidebar" class="col-md-3 col-lg-2 bg-light sidebar p-3 d-flex flex-column vh-100 justify-content-center">
        <div class="text-center mb-4">
            <h3 class="m-0">Sistema de Chamados</h3>
        </div>
        <ul class="nav flex-column text-center flex-grow-1 justify-content-center">
            <li class="nav-item mb-3">
                <button class="btn w-100 text-start" data-bs-toggle="modal" data-bs-target="#clienteModal">Clientes</button>
            </li>
            <li class="nav-item mb-3">
                <a class="btn w-100 text-start" href="#">Chamados</a>
            </li>
            <li class="nav-item mb-3">
                <button type="button" data-bs-toggle="modal" class="btn w-100 text-start" data-bs-target="#exampleModal">Relatórios</button>
            </li>
        </ul>
        <div class="text-center">
            <button class="btn w-100 text-white" style="background-color: #8EC5FF;">Sair</button>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="flex-grow-1 p-4 overflow-auto">
        @yield('content')
    </main>

    @include('modal.reportModal')
    @include('modal.clientModal')

    @vite(['resources/js/app.js'])
</body>
</html>