<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Valorant\ShowArticlesController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/valorant', [ShowArticlesController::class, 'index']);
Route::get('/test', [TestController::class, 'test']);