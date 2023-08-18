<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CalledController;
use App\Http\Controllers\LawyersProgressController;
use App\Http\Controllers\UserController;

Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'
    ], function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
});


Route::group([
    'prefix' => 'v1',
    'middleware' => 'jwt.auth'
], function () {
    Route::get('calleds', [CalledController::class, 'index']);
    Route::get('calleds/{id}', [CalledController::class, 'show']);
    Route::post('calleds', [CalledController::class, 'store']);
    Route::put('calleds/{id}', [CalledController::class, 'update']);
    Route::delete('calleds/{id}', [CalledController::class, 'destroy']);
});

Route::prefix('v1')
    ->group(function () {

        Route::get('all', [LawyersProgressController::class, 'index']);

        Route::get('find/{id}', [LawyersProgressController::class, 'show']);

        Route::post('new-process', [LawyersProgressController::class, 'store']);

        Route::put('process/{id}/edit', [LawyersProgressController::class, 'update']);

        Route::delete('process/{id}/remove', [LawyersProgressController::class, 'destroy']);


        Route::get('find-user/{id}',            [UserController::class, 'show']);

        Route::post('user/new',             [UserController::class, 'register']);

        Route::put('user/{id}/edit',            [UserController::class, 'update']);

        Route::delete('user/{id}/remove',           [UserController::class, 'destroy']);
});
