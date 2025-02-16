<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-primary">Bootstrap instalado com sucesso! 🚀</h1>
            <button class="btn btn-success">Botão de teste</button>
        </div>
        
        @vite(['resources/js/app.js'])
    </body>
</html>
