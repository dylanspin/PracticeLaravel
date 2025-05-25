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
    <body class="">
        
        {{-- ! BACKGROUND SECTION --}}
        <div class="d-backgroundContainer">
            <div class="d-sideBackgroundMap">
                <img src="{{ asset('images/ui/DarkBackgroundMap.png') }}" alt="" class="d-bg-image antialiased d-showDark" />
                <img src="{{ asset('images/ui/LightBackgroundMap.png') }}" alt="" class="d-bg-image antialiased d-showLight" />
            </div>

            <div class="grid-overlay"></div>
            <div class="shooting-stars" id="shooting-stars"></div>
        </div>

        <div class="breakPointIndictor"></div> <!--- Break point indicator for working on responsive design --->
        
        {{-- <button onclick="toggleTheme()">switch theme</button> --}}

        <div class="d-login-wrapper">
            <div class="d-topSignin">
                <span class="d-s7"><span  class="d-secondTextColor d-w1">Sign into</span > <span class="d-mainTextColor">Henschotermeer</span></span>
                <h1 class="d-mainTextColor d-s3 d-w4">Parking Shop</h1>
            </div>
            
            {{ $slot }}

            <div class="d-bottomLoginSettings"> <!--- bottom left language/dark theme switcher --->
                <button class="d-loginDarkThemeButton d-border-white d-s6 d-mainTextColor d-center" onclick="toggleTheme()">
                    <img src="{{ asset('images/ui/moonWhite.png') }}" alt="" class="d-showDark d-center-abs" />
                    <img src="{{ asset('images/ui/Sun-black.png') }}" alt="" class="d-showLight d-center-abs" />
                    
                    {{-- hover version icons --}}
                    <img src="{{ asset('images/ui/moonDark.png') }}" alt="" class="d-showDark d-center-abs d-iconShowHover" />
                    <img src="{{ asset('images/ui/Sun-light.png') }}" alt="" class="d-showLight d-center-abs d-iconShowHover" />
                </button>
                <div class="d-languageDropDown d-border-white d-s6 d-mainTextColor d-center">
                    <img src="{{ asset('images/ui/languageIconLight.png') }}" alt="" class="d-showDark d-center-abs" />
                    <img src="{{ asset('images/ui/languageIconDark.png') }}" alt="" class="d-showLight d-center-abs" />
                    {{-- add world language icon here  --}}
                    English 
                    {{-- add down icon here  --}}
                    <div class="dropdown-content">
                        <p>Hello World!</p>
                    </div>
                </div>
                    
            </div>

        </div>
        
        <p class="d-parkingwareLogo">PARKINGWARE</p>

        <script src="{{ asset('js/stars.js') }}"></script>
        <script src="{{ asset('js/test.js') }}"></script>
    </body>
</html>
