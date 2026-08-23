<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::get('/profile', [\App\Http\Controllers\Api\ProfileController::class, 'show']);
    Route::post('/profile', [\App\Http\Controllers\Api\ProfileController::class, 'update']);
});

Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:Admin'])->group(function () {
    Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
});
