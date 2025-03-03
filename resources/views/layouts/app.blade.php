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
    <!-- Regnbue -->
    <body class="bg-gradient-to-b from-emerald-600 to-emerald-400 dark:bg-gradient-to-b dark:from-emerald-600 dark:to-emerald-400 h-full p-5 font-black font-sans antialiased">
        <div class="min-h-screen ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <!-- Regnbue -->
            @isset($header)
                <header class="bg-gradient-to-b from-red-600 to-orange-400 dark:bg-gradient-to-b dark:from-emerald-800 dark:to-emerald-700 shadow">
                    <div class=" sm:flex">
                        <div class="max-w-7xl mx-auto font-black py-3 px-4 sm:px-6  lg:px-8 text-right">
                            {{ $header }}
                        </div>
                        
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="mb-3">
                <div class="mt-2">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
