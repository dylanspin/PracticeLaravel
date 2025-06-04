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

</header>

<script src="{{ asset('js/topNav.js') }}"></script>
