<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('contact', function () {
    return view('contact');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
// Route::get('/profile', [HomeController::class, 'profile']);
