<?php

use App\Http\Auth\UserAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('login');
});

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/forgotPassword', 'forgotPassword')->name('forgotPassword');
Route::view('/home', 'home')->name('home');

Route::post('/userRegister', [UserAuth::class, 'register'])->name('auth.register');
Route::post('/loginSubmit', [UserAuth::class, 'login'])->name('auth.login');
