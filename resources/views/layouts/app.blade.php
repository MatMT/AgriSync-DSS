<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AgriSync - @yield('titulo')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/css/styles.css'])
    @vite(['resources/js/app.js'])
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-gray-800 p-4">
        <nav class="flex items-center justify-between transition-transform duration-500 transform">
            <div class="flex items-center justify-center flex-grow space-x-10"> <!-- Increased space-x to 8 -->
                <a href="#" class="text-white hover:text-gray-300 transition relative group">
                    <span>Inicio</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-white h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition relative group">
                    <span>Cuentas</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-white h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition relative group">
                    <span>Mis movimientos</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-white h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="text-white hover:text-gray-300 transition relative group">
                    <span>About us</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-white h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </div>
            <button
                class="bg-white text-blue-500 px-4 py-2 rounded-full hover:bg-blue-100 transition transform hover:scale-110">Iniciar
                sesión</button>
        </nav>
    </header>
    <div class="contenedor flex flex-col items-center ">
        @yield('contenido')
    </div>

    @include('layouts.footer')
</body>

</html>
