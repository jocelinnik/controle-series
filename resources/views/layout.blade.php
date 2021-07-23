<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Controle de Séries</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">@yield("cabecalho")</h1>
            </div>

            @yield("conteudo")
        </div>
    </body>
</html>
