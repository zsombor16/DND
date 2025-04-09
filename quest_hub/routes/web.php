<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CharSheetController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Models\Adventure;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.php');
});

Route::resource('welcome',WelcomeController::class);
Route::resource('accounts',AccountController::class);
Route::resource('groups',GroupController::class);
Route::resource('adventures',AdventureController::class);
Route::resource('characters',CharacterController::class);
Route::resource('charactersheets',CharSheetController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
