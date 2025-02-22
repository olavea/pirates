<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Pirates') }}</title>
        <link rel="icon" href="favicons.svg">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-emerald-400 dark:bg-emerald-400">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-emerald dark:bg-emerald-800 shadow">
                    <div class="flex">
                        <div class="max-w-7xl mx-auto py-9 px-4 sm:px-6 lg:px-8 text-right">
                            {{ $header }}
                        </div>
                        <x-primary-button href="/add">Tell Your Tale</x-button>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
