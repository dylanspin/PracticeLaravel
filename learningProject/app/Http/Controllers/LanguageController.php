<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Closure;

class LanguageController extends Controller
{
    public function switch($lang)
    {
        $availableLanguages = ['en', 'nl', 'de', 'es', 'fr', 'pt', 'it', 'he', 'ar', 'sv', 'no', 'da', 'el'];

        if (in_array($lang, $availableLanguages)) {
            Session::put('app_locale', $lang);
            Session::save();
            logger('Changed language: ' . $lang);
            logger('The new set session data:', Session::all());
        }

        return Redirect::back(); // go back to previous page
    }
}