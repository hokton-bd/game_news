<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Valorant\ScrapeController;
use App\Http\Controllers\Valorant\ShowArticlesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/valorant', [ShowArticlesController::class, 'index']);

Route::get('/valorant/scrape', [ScrapeController::class, 'run']);