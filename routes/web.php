<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get("/", function () {
    return redirect(route("series.index"));
})->name("index");

Route::resource('/series', SeriesController::class)->except(['show']);
