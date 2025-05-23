<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- css sheet --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        
        {{-- BACKGROUND SECTION --}}
        <div class="d-sideBackgroundMap">
            <img src="{{ asset('images/ui/DarkBackgroundMap2.png') }}" alt="" class="d-bg-image antialiased" />
            {{-- <div class="gradient-overlay"></div> --}}
        </div>

        <div class="grid-overlay"></div>
        <div class="shooting-stars" id="shooting-stars"></div>

        {{-- <button onclick="toggleTheme()">switch theme</button> --}}

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            

            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current d-mainTextColor" />
                </a>
            </div>

            {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg d-secondColor d-shadow d-border"> <!--- main background wrapper div of all auth pages  --->
                {{ $slot }}
            </div> --}}

        </div>
        
        <p class="d-parkingwareLogo">PARKINGWARE</p>



        <script src="{{ asset('js/stars.js') }}"></script>
        <script src="{{ asset('js/test.js') }}"></script>

    </body>
</html>
