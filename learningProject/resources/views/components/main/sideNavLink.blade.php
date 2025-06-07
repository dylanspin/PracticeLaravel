 <a class="d-sideNavLink">
    <div class="d-sideNavHoverBackground"></div>
    <div class="d-sideLinkIconSection">
        <img src="{{ asset('images/ui/' . $icon . 'Dark-1.png') }}" alt="" class="d-showDark d-sideLinkIcon d-DontShow"/>
        <img src="{{ asset('images/ui/' . $icon . 'Dark-2.png') }}" alt="" class="d-showDark d-sideLinkIcon d-Show"/>

        <img src="{{ asset('images/ui/' . $icon . 'Light-1.png') }}" alt="" class="d-showLight d-sideLinkIcon d-DontShow"/>
        <img src="{{ asset('images/ui/' . $icon . 'Light-2.png') }}" alt="" class="d-showLight d-sideLinkIcon d-Show"/>
    </div>
    
    <span>{{ $slot }}</span>
</a>