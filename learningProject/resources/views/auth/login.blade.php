<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <form method="POST" action="{{ route('login') }}" class="d-login-form">
        @csrf

        <!-- Email Address -->
        <div class="d-inputSpacing">
            <x-input-label for="email" :value="__('Email')"/>
            
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Your email" class="d-loginInput {{ $errors->has('email') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/EmailIconDark.png') }}" alt="" class="d-showDark d-inputIcon"/>
                    <img src="{{ asset('images/ui/EmailIconLight.png') }}" alt="" class="d-showLight d-inputIcon"/>
                </div>
            </div>
            
        </div>

        <!-- Password -->
        <div class="d-inputSpacing">
            <x-input-label for="password" :value="__('Password')" />
            
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="d-inputWrapper">
                <input type="password" name="password" required autocomplete="current-password" placeholder="Your password" class="d-loginInput {{ $errors->has('password') ? 'd-errorInput' : '' }}"> 
                
                <div class="hideOnInput">
                    <img src="{{ asset('images/ui/PasswordIconDark.png') }}" alt="" class="d-showDark d-inputIcon"/>
                    <img src="{{ asset('images/ui/PasswordIconLight.png') }}" alt="" class="d-showLight d-inputIcon"/>
                </div>
            </div>

        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
