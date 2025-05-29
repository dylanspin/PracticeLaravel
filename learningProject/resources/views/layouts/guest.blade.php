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

        
        <script>
            const GREETINGS = {
                morning: "@lang('greeting.greeting_morning')",
                afternoon: "@lang('greeting.greeting_afternoon')",
                evening: "@lang('greeting.greeting_evening')",
                night: "@lang('greeting.greeting_night')",
                welcomeBack: "@lang('greeting.welcome_back')",
                tagline: "@lang('greeting.motivational_tagline')",

                noProblem: "@lang('greeting.no_problem')",
                passwordBack: "@lang('greeting.password_back')"
            };


        </script>

    </head>
    <body class="">

        {{-- ! TRANSITION SECTION --}}
        <div id="page-transition"></div>

        {{-- ! BACKGROUND SECTION --}}
        <div class="d-backgroundContainer">
            <div class="d-sideBackgroundMap">
                <img src="{{ asset('images/ui/DarkBackgroundMap.png') }}" alt="" class="d-bg-image d-showDark" />
                <img src="{{ asset('images/ui/LightBackgroundMap.png') }}" alt="" class="d-bg-image d-showLight" />
            </div>

            <div class="grid-back "></div>
            <div class="grid-overlay"></div>
            <div class="shooting-stars" id="shooting-stars"></div>
        </div>

        <div class="breakPointIndictor "></div> <!--- Break point indicator for working on responsive design --->
        
        <div class="d-greetingContainer "> <!--- Right side welcome text ---->
            <div class="d-greeting">
                <span class="d-w2" id="greeting-p1">Good evening,</span><span id="greeting-p2"> welcome back. <br>
                Let's get started.</span>
            </div>
        </div>

        {{-- Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. --}}

        {{-- <button onclick="toggleTheme()">switch theme</button> --}}

        <div class="d-login-wrapper">
            <div class="d-topSignin">
                <span class="d-s7"><span  class="d-secondTextColor d-w1">@lang('general.sign_in')</span > <span class="d-mainTextColor">{{ config('app.name') }}</span></span>
                <h1 class="d-mainTextColor d-s3 d-w4">Parking Shop</h1>
            </div>
            
            {{ $slot }}
        </div>

        <div class="d-bottomLoginSettings"> <!--- top right language/dark theme switcher --->
            
            <button class="d-loginDarkThemeButton d-border-white d-s6 d-mainTextColor" onclick="toggleTheme()">
                <img src="{{ asset('images/ui/moonWhite.png') }}" alt="" class="d-showDark d-center-abs d-loginIcon" />
                <img src="{{ asset('images/ui/Sun-black.png') }}" alt="" class="d-showLight d-center-abs d-loginIcon" />
                
                <img src="{{ asset('images/ui/moonDark.png') }}" alt="" class="d-showDark d-iconShowHover d-center-abs d-loginIcon" />
                <img src="{{ asset('images/ui/Sun-light.png') }}" alt="" class="d-showLight d-iconShowHover d-center-abs d-loginIcon" />
            </button>
            
            <div class="d-languageDropDown d-border-white d-s6 d-mainTextColor">
                <img src="{{ asset('images/ui/languageIconLight.png') }}" alt="" class="d-showDark d-loginIcon d-languageIcon"/>
                <img src="{{ asset('images/ui/languageIconDark.png') }}" alt="" class="d-showLight d-loginIcon d-languageIcon"/>

                <div class="d-currentLanguage">@lang('general.this_language')</div>

                <img src="{{ asset('images/ui/UpDownIconDark.png') }}" alt="" class="d-showLight d-upDownIcon"/>
                <img src="{{ asset('images/ui/UpDownIcon.png') }}" alt="" class="d-showDark d-upDownIcon"/>

                <div class="dropdown-content">
                    
                    {{-- gets the current language so the language in the list can be shown as selected --}}
                    @php
                        use Illuminate\Support\Facades\App;
                        $currentLang = App::getLocale();
                    @endphp
                    @foreach ($languages as $code => $name)
                        <div class="d-languageListing" onclick="window.location.href='{{ route('language.switch', ['lang' => $code]) }}'">
                            <div class="languageDot {{ $code === $currentLang ? 'languageDotSelected' : '' }}"></div>
                            <div class="languageText {{ $code === $currentLang ? 'languageTextSelected' : '' }}">{{ $name }}</div>
                        </div>
                    @endforeach
                   
                </div>
            </div>
        </div>

     
        
        <p class="d-parkingwareLogo">PARKINGWARE</p>
        
        <script src="{{ asset('js/intro.js') }}"></script>
        <script src="{{ asset('js/stars.js') }}"></script>
        <script src="{{ asset('js/theme.js') }}"></script>
        <script src="{{ asset('js/gridEffect.js') }}"></script>
        <script src="{{ asset('js/greeting.js') }}"></script>
    </body>
</html>
