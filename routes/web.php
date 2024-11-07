<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CategoryController;

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

Route::get('kerjasama', function () {
    return view('unit.kerjasama');
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

// Route for downloading a specific file
Route::get('/files/download/{id}', [FileController::class, 'download'])->name('files.download');

// Resource routes for FileController
Route::resource('/files', FileController::class)->except(['show', 'edit', 'update']); // Exclude specific methods if not needed

// If you want to create a separate route for normal users to view files
Route::get('/files/user', [FileController::class, 'files'])->name('files.user');

// routes/web.php

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

