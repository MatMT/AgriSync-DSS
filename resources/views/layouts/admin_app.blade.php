<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin AgriSync - @yield('titulo')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/css/styles.css'])
    @vite(['resources/js/app.js'])
</head>

<body class="bg-gray-800 flex flex-col min-h-screen text-gray-200 max-w-screen-2xl mx-auto">

    @include('layouts.admin_header')

    <div class="contenedor flex flex-col items-center px-3 py-8">
        @yield('contenido')
    </div>

    @include('layouts.footer')
</body>

</html>
