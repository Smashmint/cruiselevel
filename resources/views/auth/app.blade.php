<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full {{ $bg ?? 'bg-gray-50' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Hoody</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Inter font family -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        
    </head>

    <body class="h-full">
        @yield('content')
    </body>    
</html>