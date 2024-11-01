<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cimorra Events - @yield('title')</title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parties.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    @include('nav.navbar') <!-- Incluye menú -->
    <div class="container">
        @yield('content')
    </div>
    @include('footer.footer') <!-- Incluye pie de pagina -->
</body>
</html>