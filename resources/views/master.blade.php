<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTZ Transports</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{url('/imoveis')}}" class="navbar-brand"><img src={{url('images/logo.png')}} alt="Logo"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{url('/imoveis')}}" class="nav-link">Listar todos os imóveis</a></li>
            <li class="nav-item"><a href="{{url('/imoveis/novo')}}" class="nav-link">Cadastrar novo imóvel</a></li>
        </ul>
    </div>
</nav>
@yield('content')


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>