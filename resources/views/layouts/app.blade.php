<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        {{-- <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}" async></script> --}}
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js') }}" async></script>

        <!-- Styles -->
        <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
