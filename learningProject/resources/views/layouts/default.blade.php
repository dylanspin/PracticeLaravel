<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="icon" href="{{ asset('favicon.ico') }}?v=1" type="image/ico">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- css sheet --}}
        <link rel="stylesheet" href="{{ asset('css/default/custom.css') }}">
    </head>
    <body class="">

        {{-- !
             ! ----------------------------------
             !
             ! THIS PAGE LAYOUT IS USED FOR TESTING STUFF
             ! NOT FOR THE ACTUAL BUILD 
             !
             ! ----------------------------------
             !--}}

        {{-- ! TRANSITION SECTION --}}
        <div id="page-transition"></div>
            
        {{ $slot }}
    
        <script src="{{ asset('js/intro.js') }}"></script> {{-- important for intro transition! --}}
    </body>
</html>
