<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <div class="vh-100 d-flex flex-column justify-content-center align-items-center bg-body-tertiary">
            <div>
                <a href="/">
                    <x-application-logo style="width:80px; height:80px;" class="fill-current text-gray-500" />
                </a>
            </div>

            <div class="card border-0 bg-white shadow-sm mt-4 px-2 py-1" style="width: 28rem;">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>