<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/complain', function () {
    return view('complain');
});

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::get('/term', function () {
    return view('term');
});

Route::get('/roomview', function () {
    return view('roomview');
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
