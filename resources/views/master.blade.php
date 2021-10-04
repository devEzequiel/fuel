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
        <a href="{{url('/home')}}" class="navbar-brand"><img src="{{ asset('/images/logo.png') }}" alt="Logo" height="60"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{url('/fueling')}}" class="nav-link">Abastecimentos</a></li>
            <li class="nav-item"><a href="{{url('/driver')}}" class="nav-link">Motoristas</a></li>
            <li class="nav-item"><a href="{{url('/vehicle')}}" class="nav-link">Veículos</a></li>
        </ul>

    </div>
</nav>
@yield('content')


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
