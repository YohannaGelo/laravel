<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('img/logo_arcos.png') }}">

    <title>@yield('title', 'Catálogo de Arcos')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        @include('layouts.navigation')
    </header>

    <!-- Contenido Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>