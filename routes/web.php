<?php

use App\Http\Controllers\SeasonsController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get("/", function () {
    return redirect(route("series.index"));
})->name("index");

Route::resource('/series', SeriesController::class)->except(['show']);


Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');