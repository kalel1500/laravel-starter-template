@props(['title' => config('app.name')])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @env('local')<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">@endenv
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- JavaScript y CSS compilados -->
        @vite(['resources/css/app.scss', 'resources/js/app.ts'])

        {{-- Acceso a las rutas de laravel desde javascipt --}}
        @routes

        <!-- Icons -->
        <link rel="icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon.ico') }}">
    </head>

    <body class="sidebar-collapse">

        <!-- Sidebar -->
        <x-includes.sidebar/>
        <!-- /.Sidebar -->

        <!-- Page container -->
        <div class="page-container"> {{-- Esto es para dar espacio al sidebar--}}

            <!-- Navbar -->
            <x-includes.navbar/>
            <!-- /.Navbar -->

            <!-- Main -->
            <main class="main-content">

                {{--Mensajes de error o de success--}}
                <x-includes.messages/>

                {{--Contenido de la app--}}
                {{ $slot }}

            </main>
            <!-- /.Main -->

            <!-- Footer -->
            <x-includes.footer/>
            <!-- /.Footer -->

        </div>
        <!-- ./Page container -->

    </body>
</html>
