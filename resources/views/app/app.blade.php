<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cruiselevel.io App</title>

         <!-- Styles -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])

         <!-- Inter font family -->
         <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


         <link rel="icon" href="{{ Storage::url('logo.svg') }}" type="image/svg+xml">

       
    </head>
    <body class="h-full">
        <div class="min-h-full">
            @include('app.header')


            <main class="max-w-7xl mx-auto pt-8 pb-10 lg:py-12 lg:px-8">
                @include('flash::message')
                @yield('content')
            </main>
        </div>
    </body>
</html>