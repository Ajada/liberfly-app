<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CalledController;
use Illuminate\Support\Facades\Route;

Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'
    ], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
});


Route::group([
    'prefix' => 'v1',
    'middleware' => 'jwt.auth'
], function () {
    Route::get('/', function () {
        return json_encode([
            'success' => true
        ]);
    });
    Route::get('calleds', [CalledController::class, 'index']);
    Route::get('calleds/{id}', [CalledController::class, 'show']);

    Route::post('calleds', [CalledController::class, 'store']);

    Route::put('calleds/{id}', [CalledController::class, 'update']);

    Route::delete('calleds/{id}', [CalledController::class, 'destroy']);
});
