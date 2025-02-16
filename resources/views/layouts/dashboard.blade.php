<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Meu Site')</title>
</head>
<body class="d-flex flex-column flex-md-row vh-100">
    <nav class="bg-light p-3 d-flex flex-column justify-content-between vh-100 position-fixed position-md-static"
         style="width: 200px;">
            <header>
                <h2 class="m-0">Sistema de Chamados</h2>
            </header>

            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a class="btn" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="#">Chamados</a>
                </li>
                <li class="nav-item">
                    <x-report-cards />
                </li>
            </ul>

            <div>
                <button class="btn w-100" style="background-color: #8EC5FF;">Sair</button>
            </div>
        </nav>
    
    <main class="flex-grow-1 p-4 overflow-auto" style="margin-left: 200px;">
        @yield('content')
    </main>

    @vite(['resources/js/app.js'])

</body>
</html>