<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}" defer></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/tailwindcss.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">



        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
           <!-- Page Content -->
            <main>
                <livewire:show-tweets />
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
