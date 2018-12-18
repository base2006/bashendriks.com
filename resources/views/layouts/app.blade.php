<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Een full stack webdeveloper met een passie voor mooie online oplossingen. Ben jij op zoek naar een toffe oplossing? Neem gerust contact op. Huidig werkzaam voor Appart Media te Roermond.">

    <title>Bas Hendriks - Full stack webdeveloper</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('stylesheets')
</head>
<body>

<div class="container-fluid">
    @include('partials.nav')
    <main>
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>