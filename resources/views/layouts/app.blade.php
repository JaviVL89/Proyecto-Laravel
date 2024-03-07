<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Incluye CSS y JavaScript compilados por Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Navegación -->
        @include('layouts.navigation')

        <!-- Contenido Principal -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
