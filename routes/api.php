<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/articles', ArticleController::class);
});

Route::get('/api/documentation', function () {
    return view('l5-swagger::index');
});