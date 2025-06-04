<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}?v=1" type="image/ico">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/default/custom.css') }}">
    </head>

    {{-- 
            ? ----------------------------------
            ? THIS PAGE LAYOUT IS USED FOR TESTING STUFF
            ? NOT FOR THE ACTUAL BUILD 
            ? ----------------------------------
    --}}

    <body class="">

        <!-- Page Content -->
       
            {{-- @include('layouts.navigation') --}}

            <x-main.topnav></x-main.topnav>

            <x-main.sidenav></x-main.sidenav>

            <main>
                {{ $slot }}
            </main>


            <x-main.footer></x-main.footer>

            <!-- Page Heading -->
            {{-- @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

          
    </body>
</html>
