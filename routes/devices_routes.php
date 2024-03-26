<?php

use Illuminate\Support\Facades\Route;
use Sfolador\Devices\Controllers\DeviceController;

Route::middleware('auth:sanctum')->prefix('api')->group(function () {
    Route::prefix('devices')->group(function () {
        Route::post('/attach', [DeviceController::class, 'attach'])->name('devices:attach');
    });
});