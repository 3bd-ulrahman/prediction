<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::redirect('/', '/dashboard');
    Route::get('dashboard', [App\Http\Controllers\Website\DashboardController::class, 'index'])->name('dashboard');
});

// users
Route::middleware('auth')->group(function () {
    Route::get('predictions/create', [App\Http\Controllers\Website\PredictionController::class, 'create'])
        ->name('predictions.create')
        ->middleware('auth');

    Route::post('Predictions', [App\Http\Controllers\Website\PredictionController::class, 'store'])->name('Predictions.store');
});
