<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <form method="POST" action="{{ route('login') }}" class="d-login-form">
        @csrf

        <!-- Email Address -->
        <div class="d-inputSpacing">
            <x-input-label for="email" :value="__('general.email')"/>
            
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="@lang('general.your_email')" class="d-loginInput d-generalStyle {{ $errors->has('email') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/EmailIconDark.png') }}" alt="" class="d-showDark d-inputIcon"/>
                    <img src="{{ asset('images/ui/EmailIconLight.png') }}" alt="" class="d-showLight d-inputIcon"/>
                </div>
            </div>
            
        </div>

        <!-- Password -->
        <div class="d-inputSpacing">
            <x-input-label for="password" :value="__('general.pass')" />
            
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="password" name="password" required autocomplete="current-password" placeholder="@lang('general.your_pass')" id="passwordInput" class="d-loginInput d-passwordInput d-generalStyle {{ $errors->has('email') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/PasswordIconDark.png') }}" alt="" class="d-showDark d-inputIcon {{ $errors->has('email') ? 'd-Ashake' : '' }}"/>
                    <img src="{{ asset('images/ui/PasswordIconLight.png') }}" alt="" class="d-showLight d-inputIcon {{ $errors->has('email') ? 'd-Ashake' : '' }}"/>
                </div>

                <button id="togglePassword" class="d-passwordButton">
                    <img src="{{ asset('images/ui/showPassDark.png') }}" alt="" id="eyeIcon" class="d-showDark d-center-abs d-showPassIcon"/>
                    <img src="{{ asset('images/ui/showPassLight.png') }}" alt="" id="eyeIcon2" class="d-showLight d-center-abs d-showPassIcon"/>

                    <img src="{{ asset('images/ui/hidePassDark.png') }}" alt="" id="eyeIconClosed" class="d-showDark d-center-abs d-showPassIcon"/>
                    <img src="{{ asset('images/ui/hidePassLight.png') }}" alt="" id="eyeIconClosed2" class="d-showLight d-center-abs d-showPassIcon"/>
                </button>
            </div>

        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label class="custom-checkbox">
                <input id="remember_me" type="checkbox" name="remember"/>
                <span class="checkmark">
                    <img src="{{ asset('images/ui/checkIconDark.png') }}" alt="" class="tick-icon d-showDark d-center-abs" />
                    <img src="{{ asset('images/ui/checkIcon.png') }}" alt="" class="tick-icon d-showLight d-center-abs" />
                </span>
                <span class="d-rememberText">@lang('general.remember_me')</span>
            </label>
        </div>

        <div class="d-center d-inputSpacingTop d-inputSpacing">
            <x-primary-button class="d-loginButton">
                <div class="d-loginButtonBackground"></div>
                <img src="{{ asset('images/ui/Signinicon.png') }}" alt="" class="d-loginButtonIcon" />
                <div class="d-center-abs d-loginText">@lang('general.sign')</div>
            </x-primary-button>
        </div>

        <div class="block mt-4 d-center d-inputSpacingTop">
            @if (Route::has('password.request'))
                <a class="d-loginLink {{ $errors->has('email') ? 'd-error-text' : '' }}" href="{{ route('password.request') }}">
                    @lang('general.forgot_pass')
                </a>
            @endif
        </div>
    </form>

        <script src="{{ asset('js/showHidePass.js') }}"></script>
</x-guest-layout>
