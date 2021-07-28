<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Controle de Séries</title>

        <!-- CSS only -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
            <a href="{{ route('listar_series') }}" class="navbar-brand">Home</a>
            @auth
            <a href="/sair" class="text-danger">Sair</a>
            @endauth

            @guest
            <a href="/entrar">Entrar</a>
            @endguest
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">@yield("cabecalho")</h1>
            </div>

            @yield("conteudo")
        </div>
    </body>
</html>
