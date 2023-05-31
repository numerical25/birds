<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('birds')->group(function () {
    Route::get('/', [\App\Http\Controllers\BirdController::class,'index']);
    Route::get('/idle', [\App\Http\Controllers\BirdController::class,'idle']);
    Route::get('/walk', [\App\Http\Controllers\BirdController::class,'walk']);
    Route::get('/eat',  [\App\Http\Controllers\BirdController::class,'eat']);

    Route::prefix('{id}')->group(function () {
        Route::get('/', [\App\Http\Controllers\BirdController::class,'getIdleById']);
        Route::get('/idle', [\App\Http\Controllers\BirdController::class,'getIdleById']);
        Route::get('/walk', [\App\Http\Controllers\BirdController::class,'getyWalkById']);
        Route::get('/eat', [\App\Http\Controllers\BirdController::class,'getEatById']);
    });
});
