<?php

use App\Http\Controllers\Candidates\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Parties\PartyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard.home');})->name('dashboard');
    Route::get('/dashboard-users', function () {return view('dashboard.users');})->name('users');
    Route::get('/dashboard-candidates', function () {return view('dashboard.candidates');})->name('candidates');
    Route::get('/dashboard-profile', function () {return view('dashboard.profile');})->name('profile');

    Route::prefix('candidates')->group(function(){
        Route::post('/', [CandidateController::class, 'store']);
    });

    Route::prefix('parties')->group(function(){
        Route::post('/', [PartyController::class, 'store']);
    });

});

require __DIR__.'/auth.php';
