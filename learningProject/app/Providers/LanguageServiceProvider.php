<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
    */
    public function boot()
    {
        $languages = [
            'en' => 'English',
            'nl' => 'Nederlands',
            'de' => 'Deutsch',
            'es' => 'Español',
            'fr' => 'Française',
            'pt' => 'Portuguese',
            'it' => 'Italiano',
            'he' => 'עברית',
            'ar' => 'عربي',
            'sv' => 'Svenska',
            'no' => 'Norsk',
            'da' => 'Dansk',
            'el' => 'ελληνικά',
            'ja' => '日本語',
        ];

        // Share with all views
        View::share('languages', $languages);
    }
}
