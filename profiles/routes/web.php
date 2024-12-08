<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// This is your homepage route (You can keep or modify this as needed)
Route::get('/', function () {
    return view('welcome');
});

// Profile routes (Add authentication middleware to restrict access)
Route::middleware('auth')->group(function () {
    // View profile
    Route::get('/profiles', [ProfileController::class, 'show'])->name('profile.show');

    // Edit profile
    Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // Update profile
    Route::put('/profiles', [ProfileController::class, 'update'])->name('profile.update');

    // Delete profile (this route is for deleting an account)
    Route::delete('/profiles', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

