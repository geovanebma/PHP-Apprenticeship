<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Series;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/add', [SeriesController::class, 'create']);
Route::post('/series/add', [SeriesController::class, 'store']);