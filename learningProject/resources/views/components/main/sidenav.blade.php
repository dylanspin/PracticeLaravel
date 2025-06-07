{{-- ? the component of the side collapsable navigation bar of the dashboard --}}

<div class="d-sideNav">

    <div class="d-sideNavTop">
        <div class="d-TopSplit3">
            <div class="d-sideNavTopButton"> </div>
        </div>

        <div class="d-TopSplit3">
            <div class="d-sideNavTopButton"> </div>
        </div>

        <div class="d-TopSplit3">
            <div class="d-sideNavTopButton"> </div>
        </div>

        {{-- <div class="d-smIconSection">
           
        </div>

        <div class="d-sideNavTopButton d-topButton2">
        </div>

        <div class="d-sideNavTopButton d-topButton1">
        </div> --}}
    </div>

    <div class="d-sideNavSection">

        <div class="d-topSideNavSection">
            <div class="d-smFoldTitle">
                Section title 
            </div>
            <div class="d-smIconSection">
                <img src="{{ asset('images/ui/icons/UpDownIcon.png') }}" alt="" class="d-showDark d-snFoldIcon"/>
                <img src="{{ asset('images/ui/icons/UpDownIconDark.png') }}" alt="" class="d-showLight d-snFoldIcon"/>
            </div>
        </div>

        <x-main.sideNavLink>
            <x-slot name="icon">
                icons/sideNav/TestIcon
            </x-slot>
            User List
        </x-main.sideNavLink>

        <x-main.sideNavLink>
            <x-slot name="icon">
                icons/sideNav/BarCodes
            </x-slot>
            Barcodes
        </x-main.sideNavLink>

        <x-main.sideNavLink>
            <x-slot name="icon">
                icons/sideNav/Reservations
            </x-slot>
            Reservations
        </x-main.sideNavLink>
       
       
    </div>  

    <div class="d-sideNavSection">

    </div>

    <div class="d-newSectionButton"></div>

</div>


<script src="{{ asset('js/sideNav.js') }}"></script>
