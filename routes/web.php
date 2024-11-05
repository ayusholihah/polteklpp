<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;

Route::get('analytics/stats', [AnalyticsController::class, 'showUserStats']);

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

Route::get('baa', function () {
    return view('unit.baa');
});

Route::get('bau', function () {
    return view('unit.bau');
});

Route::get('uppm', function () {
    return view('unit.uppm');
});

Route::get('d2-pmphp', function () {
    return view('prodi.d2-pmphp');
});
Route::get('d3-akt', function () {
    return view('prodi.d3-akt');
});
Route::get('d3-btp', function () {
    return view('prodi.d3-btp');
});
Route::get('d4-ppn', function () {
    return view('prodi.d4-ppn');
});
Route::get('d4-trki', function () {
    return view('prodi.d4-trki');
});
Route::get('d4-trmip', function () {
    return view('prodi.d4-trmip');
});