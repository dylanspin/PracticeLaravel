<x-guest-layout>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <form method="POST" action="{{ route('register') }}" class="d-login-form">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('general.name')" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="@lang('general.your_name')" class="d-loginInput d-generalStyle {{ $errors->has('email') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/UserNameDark.png') }}" alt="" class="d-showDark d-inputIcon"/>
                    <img src="{{ asset('images/ui/UserNameLight.png') }}" alt="" class="d-showLight d-inputIcon"/>
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('general.email')" />
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
        <div class="mt-4">
            <x-input-label for="password" :value="__('general.pass')" />

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            
            <div class="d-inputWrapper">
                <input type="password" name="password" required autocomplete="new-password" placeholder="@lang('general.your_pass')" id="password" class="d-loginInput d-passwordInput d-generalStyle {{ $errors->has('password') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/PasswordIconDark.png') }}" alt="" class="d-showDark d-inputIcon {{ $errors->has('password') ? 'd-Ashake' : '' }}"/>
                    <img src="{{ asset('images/ui/PasswordIconLight.png') }}" alt="" class="d-showLight d-inputIcon {{ $errors->has('password') ? 'd-Ashake' : '' }}"/>
                </div>

                <button id="togglePassword" class="d-passwordButton">
                    <img src="{{ asset('images/ui/showPassDark.png') }}" alt="" id="eyeIcon" class="d-showDark d-center-abs d-showPassIcon"/>
                    <img src="{{ asset('images/ui/showPassLight.png') }}" alt="" id="eyeIcon2" class="d-showLight d-center-abs d-showPassIcon"/>

                    <img src="{{ asset('images/ui/hidePassDark.png') }}" alt="" id="eyeIconClosed" class="d-showDark d-center-abs d-showPassIcon"/>
                    <img src="{{ asset('images/ui/hidePassLight.png') }}" alt="" id="eyeIconClosed2" class="d-showLight d-center-abs d-showPassIcon"/>
                </button>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('general.confirm_pass2')" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="@lang('general.confirm_pass')" id="password_confirmation" class="d-loginInput d-passwordInput d-generalStyle {{ $errors->has('password') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/PasswordIconDark.png') }}" alt="" class="d-showDark d-inputIcon {{ $errors->has('password') ? 'd-Ashake' : '' }}"/>
                    <img src="{{ asset('images/ui/PasswordIconLight.png') }}" alt="" class="d-showLight d-inputIcon {{ $errors->has('password') ? 'd-Ashake' : '' }}"/>
                </div>

            </div>

        </div>

        <div class="d-center d-inputSpacingTop d-inputSpacing">
            <x-primary-button class="d-loginButton">
                <div class="d-loginButtonBackground"></div>
                <img src="{{ asset('images/ui/Signinicon.png') }}" alt="" class="d-loginButtonIcon" />
                <div class="d-center-abs d-loginText">@lang('general.register')</div>
            </x-primary-button>
        </div>
    </form>

    <script src="{{ asset('js/showHidePass.js') }}"></script>

</x-guest-layout>
