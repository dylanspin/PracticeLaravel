<x-guest-layout>
   
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <form method="POST" action="{{ route('password.email') }}" class="d-login-form">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('general.email')" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="email" id="email" name="email" :value="old('email')" required autofocus placeholder="@lang('general.your_email')" class="d-loginInput d-generalStyle  {{ $errors->has('email') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/EmailIconDark.png') }}" alt="" class="d-showDark d-inputIcon"/>
                    <img src="{{ asset('images/ui/EmailIconLight.png') }}" alt="" class="d-showLight d-inputIcon"/>
                </div>
            </div>
        </div>

        <div class="d-center d-inputSpacingTop d-inputSpacing">

             <x-primary-button class="d-loginButton">
                <div class="d-loginButtonBackground"></div>
                <img src="{{ asset('images/ui/Signinicon.png') }}" alt="" class="d-loginButtonIcon" />
                <div class="d-center-abs d-loginText">@lang('general.send_reset')</div>
            </x-primary-button>
        </div>

        <div class="block mt-4 d-center d-inputSpacingTop">
            @if (Route::has('password.request'))
                <a class="d-loginLink" href="/login">
                    @lang('general.back')
                </a>
            @endif
        </div>
    </form>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
</x-guest-layout>
