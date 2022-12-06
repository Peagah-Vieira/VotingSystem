<?php

use App\Http\Controllers\Candidates\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Parties\PartyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('candidates')->group(function(){
        Route::post('/', [CandidateController::class, 'store']);
    });

    Route::prefix('parties')->group(function(){
        Route::post('/', [PartyController::class, 'store']);
    });

});

Route::view('/dash', 'dash');

require __DIR__.'/auth.php';
