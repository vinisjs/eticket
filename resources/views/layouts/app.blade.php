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
    <nav id="sidebar" class="col-md-3 col-lg-2 bg-light sidebar p-3 d-flex flex-column vh-100 justify-content-center">
        <div class="text-center mb-4">
            <h3 class="m-0">Sistema de Chamados</h3>
        </div>
        <ul class="nav flex-column flex-grow-1 justify-content-center">
            <li class="nav-item">
                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#callModal">
                    Novo Chamado
                </button>
            </li>                
            <li class="nav-item">
                <a class="btn text-center" href="#">Chamados</a>
            </li>
        </ul>
        <div class="text-center">
            <button class="btn w-100 text-white" style="background-color: #8EC5FF;">Sair</button>
        </div>
    </nav>

    <main class="flex-grow-1 p-4 overflow-auto">
        @yield('content')
    </main>

    @include('modal.reportModal')
    @include('modal.clientModal')

    @vite(['resources/js/app.js'])
</body>
</html>