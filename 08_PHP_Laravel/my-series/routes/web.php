<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Series;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index'])->middleware("auth");
Route::get('/series/add', [SeriesController::class, 'create'])->name("form_add_serie")->middleware("auth");
Route::post('/series/add', [SeriesController::class, 'store'])->middleware("auth");
Route::post('/series/{id}/editName', [SeriesController::class, 'editName'])->middleware("auth");
Route::delete('/series/{id}', [SeriesController::class, 'destroy'])->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
