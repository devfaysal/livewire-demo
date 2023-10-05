<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <div class="bg-body-tertiary vh-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow-sm">
                    <div style="max-width: 1280px; margin:auto;" class="py-3 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="d-flex justify-content-center">
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>