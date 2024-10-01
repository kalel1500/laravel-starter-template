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
        @vite(['resources/css/app.css', 'resources/js/app.ts'])

        {{-- Acceso a las rutas de laravel desde javascipt --}}
        @routes

        <!-- Icons -->
        <link rel="icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/favicon.ico') }}">
    </head>

    <body class="bg-gray-100">

        <!-- Navbar -->
        <x-includes.navbar/>

        <!-- Sidebar -->
        <x-includes.sidebar/>

        <!-- Wrapper -->
        <div class="p-4 sm:ml-64 mt-16">

            <!-- Main -->
            <main class="bg-blue-500">

                <!-- App mensajes -->
                <x-includes.messages/>

                <!-- Page content -->
                {{ $slot }}

            </main>

            <!-- Footer -->
            <x-includes.footer/>
        </div>

    </body>
</html>
