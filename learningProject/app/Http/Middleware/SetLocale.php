<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('app_locale', config('app.locale'));
        logger('Saved language: ' . $locale);
        logger('Session data:', Session::all());
        App::setLocale($locale);

        return $next($request);
    }
}