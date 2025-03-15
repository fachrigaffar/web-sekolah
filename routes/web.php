<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

// Pastikan Filament route ada
Route::prefix('admin')->group(function () {
    Filament\Http\Middleware\Authenticate::class;
});
