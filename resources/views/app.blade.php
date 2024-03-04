<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AgrySinc - @yield('titulo')</title>

    <!-- Fonts -->

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold">
        Hello world!
    </h1>


    @yield('contenido')
</body>

</html>
