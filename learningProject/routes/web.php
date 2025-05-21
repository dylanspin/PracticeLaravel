<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::middleware(['auth'])->group(function () {
   
    $pages = [
        'dashboard' => 'dashboard',
        'test' => 'testing',
        'about' => 'about',
        'admin' => 'mainPages.admin_panel',
        'biomes' => 'mainPages.biomes',
        'bugs' => 'mainPages.bug',
        'characters' => 'mainPages.character',
        'creatures' => 'mainPages.creatures',
        'dialog' => 'mainPages.dialog',
        'documentation' => 'mainPages.documentation',
        'experiments' => 'mainPages.experiments',
        'feautures' => 'mainPages.feautures',
        'overview' => 'mainPages.game_overview',
        'gear' => 'mainPages.gear',
        'inventory' => 'mainPages.inventory',
        'items' => 'mainPages.items',
        'map' => 'mainPages.map',
        'marketing' => 'mainPages.marketing',
        'moodboard' => 'mainPages.moodboard',
        'notes' => 'mainPages.notes',
        'procedural' => 'mainPages.procedural_generation',
        'roadmap' => 'mainPages.road_map',
        'roles' => 'mainPages.roles',
        'skills' => 'mainPages.skills',
        'snippets' => 'mainPages.snippets',
        'todo' => 'mainPages.to_do',
        'tolearn' => 'mainPages.to_learn',
        'ui' => 'mainPages.ui_ux',
        'ai' => 'mainPages.ai',
        'profilesettings' => 'mainPages.profile_settings',
        'faw' => 'mainPages.faq',
        'tickets' => 'mainPages.tickets',
        'logbook' => 'mainPages.logbook',
    ];

    foreach ($pages as $url => $view) {
        Route::get("/$url", fn() => view($view));
    }
});

// Redirect guests to login
Route::get('/', function () {
    return redirect(Auth::check() ? '/dashboard' : '/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
