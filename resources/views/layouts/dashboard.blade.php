<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Meu Site')</title>
    
</head>
<body style="background-color: #FAFAFA; display: grid; grid-template-columns: 200px 1fr;">
    <div style="height: 100vh; display: grid; justify-content: space-between">
        <nav class="bg-light p-3" style="width: 200px; height: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <header>
                <h2 class="m-0">Sistema de Chamados</h2>
            </header>

            <ul class="nav flex-column mt-4">
                <li class="nav-item" style="margin-top: 300px">
                    <a class="btn" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="#">Chamados</a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="#">Relatórios</a>
                </li>
            </ul>

            <div style="margin-top: 300px">
                <button class="btn w-100" style="background-color: #8EC5FF;">Sair</button>
            </div>
        </nav>
    </div>
    
    <main class="">
        @yield('content')
    </main>
    
    
    @vite(['resources/js/app.js'])
</body>
</html>