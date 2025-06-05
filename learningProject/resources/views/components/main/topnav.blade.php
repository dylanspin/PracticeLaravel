{{-- ? the component of the top navigation bar of the dashboard --}}

<header class="d-topNav">
    <div class="d-navleftSection">
        <a class="d-navLogoImg" href="/dashboard">
            <img src="{{ asset('images/ui/LogoLight.png') }}" alt="" class="d-showDark d-imgFull"/>
            <img src="{{ asset('images/ui/LogoDark.png') }}" alt="" class="d-showLight d-imgFull"/>
        </a>
        
        <div class="d-headerText">
            <div class="d-headerTitle">Parkingshop</div>
            <div class="d-headerVersion"> {{ config('app.version') }} </div>
        </div>

        <div class="d-headerBackground">
            <div class="d-headerleftBackground"></div>
            <div class="d-headerGradient"></div>
        </div>
    </div>

    <div class="d-navCenter">
    </div>

    <div class="d-navRightSection">
        <div class="d-rightBackgroundGradient"></div>
        
        <div class="d-slantContainer">
            <div class="d-topBarSlant"></div>
            <div class="d-headerBackgroundFill"></div>
        </div>
    
        <div class="d-circleButton d-searchButton d-searchExpended">
            <img src="{{ asset('images/ui/icons/SearchIconDark-1.png') }}" alt="" class="d-showDark d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/SearchIconDark-2.png') }}" alt="" class="d-showDark d-circleIcon d-showHover"/>

            <img src="{{ asset('images/ui/icons/SearchIconLight-1.png') }}" alt="" class="d-showLight d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/SearchIconLight-2.png') }}" alt="" class="d-showLight d-circleIcon d-showHover"/>
        </div>

        <div class="d-circleButton d-tabOverviewButton">
            <img src="{{ asset('images/ui/icons/TabsOverViewDark-1.png') }}" alt="" class="d-showDark d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/TabsOverViewDark-2.png') }}" alt="" class="d-showDark d-circleIcon d-showHover"/>

            <img src="{{ asset('images/ui/icons/TabsOverViewLight-1.png') }}" alt="" class="d-showLight d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/TabsOverViewLight-2.png') }}" alt="" class="d-showLight d-circleIcon d-showHover"/>
        </div>

        <div class="d-circleButton d-darkLigth" onclick="toggleTheme()">
            <img src="{{ asset('images/ui/icons/MoonIconDark-1.png') }}" alt="" class="d-showDark d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/MoonIconDark-2.png') }}" alt="" class="d-showDark d-circleIcon d-showHover"/>

            <img src="{{ asset('images/ui/icons/SunIconLight-1.png') }}" alt="" class="d-showLight d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/SunIconLight-2.png') }}" alt="" class="d-showLight d-circleIcon d-showHover"/>
        </div>

        <div class="d-circleButton d-notifications">
            <img src="{{ asset('images/ui/icons/NotifactionsDark-1.png') }}" alt="" class="d-showDark d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/NotifactionsDark-2.png') }}" alt="" class="d-showDark d-circleIcon d-showHover"/>

            <img src="{{ asset('images/ui/icons/NotifactionsLight-1.png') }}" alt="" class="d-showLight d-circleIcon d-dontShowHover"/>
            <img src="{{ asset('images/ui/icons/NotifactionsLight-2.png') }}" alt="" class="d-showLight d-circleIcon d-showHover"/>
        </div>
        
        {{-- ?? PROFIL DROP DOWN --}}
        <x-main.profileDropDown></x-main.profileDropDown>
    </div>

</header>

<script src="{{ asset('js/theme.js') }}"></script>

<script src="{{ asset('js/topNav.js') }}"></script>
