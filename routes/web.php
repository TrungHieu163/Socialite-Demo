<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;

Route::get('/', function () {
    return redirect('/login');
});

// Trang login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Trang sau khi đăng nhập
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// OAuth
Route::get('/auth/{provider}', [SocialAuthController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [SocialAuthController::class, 'callback']);

// Logout
Route::post('/logout', [SocialAuthController::class, 'logout'])->name('logout');