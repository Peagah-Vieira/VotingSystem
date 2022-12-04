<?php

use App\Http\Auth\UserAuth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    
});

Route::get('/', [UserAuth::class, 'index'])->name('login');
Route::get('/register', [UserAuth::class, 'registerPage'])->name('register');
Route::get('/forgotPassword', [UserAuth::class, 'forgotPassword'])->name('forgotPassword');

Route::post('/register', [UserAuth::class, 'register'])->name('auth.register');
Route::post('/login', [UserAuth::class, 'login'])->name('auth.login');
