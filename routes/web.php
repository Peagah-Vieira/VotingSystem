<?php

use App\Http\Auth\UserAuth;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', [Main::class, 'index'])->name('login');
Route::get('/register', [Main::class, 'register'])->name('register');
Route::get('/forgotPassword', [Main::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/home', [Main::class, 'home'])->name('home');
Route::post('/userRegister', [UserAuth::class, 'register'])->name('auth.register');
Route::post('/loginSubmit', [UserAuth::class, 'login'])->name('auth.login');
