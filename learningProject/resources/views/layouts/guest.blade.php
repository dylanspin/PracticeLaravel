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
                <span class="d-s7"><span  class="d-secondTextColor d-w1">@lang('general.sign_in')</span > <span class="d-mainTextColor">Henschotermeer</span></span>
                <h1 class="d-mainTextColor d-s3 d-w4">Parking Shop</h1>
            </div>
            
            {{ $slot }}
        </div>

        <div class="d-bottomLoginSettings"> <!--- bottom left language/dark theme switcher --->
            <div class="d-languageDropDown d-border-white d-s6 d-mainTextColor">
                <img src="{{ asset('images/ui/languageIconLight.png') }}" alt="" class="d-showDark d-loginIcon d-languageIcon"/>
                <img src="{{ asset('images/ui/languageIconDark.png') }}" alt="" class="d-showLight d-loginIcon d-languageIcon"/>

                <div class="d-currentLanguage">@lang('general.this_language')</div>

                <img src="{{ asset('images/ui/UpDownIconDark.png') }}" alt="" class="d-showLight d-upDownIcon"/>
                <img src="{{ asset('images/ui/UpDownIcon.png') }}" alt="" class="d-showDark d-upDownIcon"/>

                <div class="dropdown-content">

                    @foreach ($languages as $code => $name)
                        <div class="d-languageListing" onclick="window.location.href='{{ route('language.switch', ['lang' => $code]) }}'">
                            <div class="languageDot"></div>
                            <div class="languageText">{{ $name }}</div>
                        </div>
                    @endforeach


                    {{-- <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">English</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Nederlands</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Deutsch</div>    
                    </div>
                    
                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Espanol</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Française</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Portuguese</div>
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Italiano</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">עברית</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">عربي</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Svenska</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Norsk</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">Dansk</div>    
                    </div>

                    <div class="d-languageListing" onclick="switchLanguage(0)">
                        <div class="languageDot"> </div>    
                        <div class="languageText">ελληνικά</div>    
                    </div> --}}

                </div>
            </div>

            <button class="d-loginDarkThemeButton d-border-white d-s6 d-mainTextColor" onclick="toggleTheme()">
                <img src="{{ asset('images/ui/moonWhite.png') }}" alt="" class="d-showDark d-center-abs d-loginIcon" />
                <img src="{{ asset('images/ui/Sun-black.png') }}" alt="" class="d-showLight d-center-abs d-loginIcon" />
                
                <img src="{{ asset('images/ui/moonDark.png') }}" alt="" class="d-showDark d-iconShowHover d-center-abs d-loginIcon" />
                <img src="{{ asset('images/ui/Sun-light.png') }}" alt="" class="d-showLight d-iconShowHover d-center-abs d-loginIcon" />
            </button>
          
        </div>
        
        <p class="d-parkingwareLogo">PARKINGWARE</p>

        <script src="{{ asset('js/stars.js') }}"></script>
        <script src="{{ asset('js/test.js') }}"></script>
    </body>
</html>
