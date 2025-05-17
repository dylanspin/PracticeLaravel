<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // returns the welcome.blade.php file 
});



Route::get('/about', function () { // if page is /about 
    return view('about'); // returns the welcome.blade.php file 
});

Route::get('/testing', function () { 
    return view('testing'); 
});



// ? RANDOM LEARNING ROUTES

Route::get('/aboutstring', function () { // if page is /aboutstring 
    return 'about page but just a string'; // returns just the string which some how works
});

Route::get('/aboutarray', function () { // if page is /aboutstring 
    return ['something', 'second item', 'some third item', 'this reminds me of drenthe college']; // returns just the array 
});
