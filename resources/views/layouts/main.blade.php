<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Meu Site')</title>

    <!-- Importando Tailwind com Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Cabeçalho -->
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-xl font-bold">Meu Site</h1>
    </header>

    <!-- Conteúdo da Página -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-gray-800 text-white text-center p-2 mt-4">
        <p>&copy; {{ date('Y') }} Meu Site</p>
    </footer>

</body>
</html>
