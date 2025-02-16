<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Meu Site')</title>
    
</head>
<body style="background-color: #FAFAFA" class="d-flex flex-column min-vh-100">
    <header class="d-flex py-3 mb-4 border-bottom bg-white" style="width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      <div class="container text-left">
        <h2 class="m-0">Sistema de Chamados</h2>
    </div>
    </header>
    
    <main class="">
        @yield('content')
    </main>
    
    @vite(['resources/js/app.js'])
</body>
</html>
