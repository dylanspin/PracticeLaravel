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
        <div class="d-rightBackgroundGradient">
            
        </div>
    
        <div class="d-searchButton">
            
        </div>

        <div class="d-tabOverviewButton">
            
        </div>
        <div class="d-darkLigth">
            
        </div>
        <div class="d-notifications">
            
        </div>
        <div class="d-profile">
            <div class="d-profileImage">
                <img src="{{ asset('images/ui/ProfilePicTest.png') }}" alt="" class="d-imgFull"/>
            </div>
            <div class="d-dotContainer">
                <div class="d-activityDot d-dot1"> </div>
            </div>
            <div class="d-userInfo"> 
                <span class="d-ProfileUsername">Gerard Spin dsad dad dsadsd</span>
                <span class="d-userProfileRole">Administrator</span>
            </div>
            
            <img src="{{ asset('images/ui/UpDownIcon.png') }}" alt="" class="d-showDark d-profileDownIcon"/>
            <img src="{{ asset('images/ui/UpDownIconDark.png') }}" alt="" class="d-showLight d-profileDownIcon"/>
            
            <div class="d-profileDropDownHitBox">
                <div class="d-profileDropContent">
                    test<br>
                    test<br>
                    test<br>
                    test<br>
                    test<br>
                </div>
            </div>
        </div>
    </div>

</header>

<script src="{{ asset('js/spinningBal.js') }}"></script>


<script src="{{ asset('js/topNav.js') }}"></script>
