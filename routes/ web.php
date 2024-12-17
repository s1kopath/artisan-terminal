<?php

use Illuminate\Support\Facades\Route;
use s1kopath\ArtisanTerminal\Http\Controllers\ArtisanTerminalController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/artisan-terminal', function () {
        return view('artisan-terminal::artisan-terminal');
    });

    Route::post('/artisan-terminal/execute', [ArtisanTerminalController::class, 'execute']);
});
