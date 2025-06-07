<div class="d-profile" href="/profile">
    <div class="d-profileImage">
        <img src="{{ asset('images/ui/ProfilePicTest.png') }}" alt="" class="d-imgFull"/>
    </div>
    <div class="d-dotContainer">
        <div class="d-activityDot d-dot1"> </div>
    </div>
    <div class="d-userInfo"> 
        <span class="d-ProfileUsername">Gerard Spin</span>
        <span class="d-userProfileRole">Administrator</span>
    </div>
    
    <img src="{{ asset('images/ui/icons/UpDownIcon.png') }}" alt="" class="d-showDark d-profileDownIcon"/>
    <img src="{{ asset('images/ui/icons/UpDownIconDark.png') }}" alt="" class="d-showLight d-profileDownIcon"/>
    
    <div class="d-profileDropDownHitBox">
        <div class="d-profileDropContent">
            <div class="d-dropDownBackground"></div>

            <a class="d-dropDownButton d-buttonMargin" href="/profile">
                <div class="d-buttonBackgroundHover"></div>
                <div class="d-iconSectionButton">
                    <img src="{{ asset('images/ui/icons/AccountSettingsDark-1.png') }}" alt="" class="d-showDark d-dropDownIcon d-dontShowHover"/>
                    <img src="{{ asset('images/ui/icons/AccountSettingsDark-2.png') }}" alt="" class="d-showDark d-dropDownIcon d-showHover"/>

                    <img src="{{ asset('images/ui/icons/AccountSettingsLight-1.png') }}" alt="" class="d-showLight d-dropDownIcon d-dontShowHover"/>
                    <img src="{{ asset('images/ui/icons/AccountSettingsLight-2.png') }}" alt="" class="d-showLight d-dropDownIcon d-showHover"/>
                </div>
                <div class="d-dropDownText">
                    Manage account
                </div>
            </a>

            <div class="d-dropDownButton d-buttonMargin">
                <div class="d-buttonBackgroundHover"></div>
                <div class="d-iconSectionButton">
                    <img src="{{ asset('images/ui/icons/StatsIconDark-1.png') }}" alt="" class="d-showDark d-dropDownIcon d-dontShowHover"/>
                    <img src="{{ asset('images/ui/icons/StatsIconDark-2.png') }}" alt="" class="d-showDark d-dropDownIcon d-showHover"/>

                    <img src="{{ asset('images/ui/icons/StatsIconLight-1.png') }}" alt="" class="d-showLight d-dropDownIcon d-dontShowHover"/>
                    <img src="{{ asset('images/ui/icons/StatsIconLight-2.png') }}" alt="" class="d-showLight d-dropDownIcon d-showHover"/>
                </div>
                <div class="d-dropDownText">
                    account stats
                </div>
            </div>

            <a class="d-dropDownButton d-buttonMargin" href="/faq">
                <div class="d-buttonBackgroundHover"></div>
                <div class="d-iconSectionButton">
                    <img src="{{ asset('images/ui/icons/Help iconDark-1.png') }}" alt="" class="d-showDark d-dropDownIcon d-dontShowHover"/>
                    <img src="{{ asset('images/ui/icons/Help iconDark-2.png') }}" alt="" class="d-showDark d-dropDownIcon d-showHover"/>

                    <img src="{{ asset('images/ui/icons/Help iconLight-1.png') }}" alt="" class="d-showLight d-dropDownIcon d-dontShowHover"/>
                    <img src="{{ asset('images/ui/icons/Help iconLight-2.png') }}" alt="" class="d-showLight d-dropDownIcon d-showHover"/>
                </div>
                <div class="d-dropDownText">
                    Need help?
                </div>
            </a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="d-dropDownButton" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                    <div class="d-buttonBackgroundHover d-hoverLogOut"></div>
                    <div class="d-iconSectionButton">
                        <img src="{{ asset('images/ui/icons/SignOutIcon.png') }}" alt="" class="d-dropDownIcon d-logOutIcon"/>
                    </div>
                    <div class="d-dropDownText d-dropDownLogOutText">
                        Logout?
                    </div>
                </button>
            </form>

        </div>
    </div>
</div>