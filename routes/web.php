<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get("/", function () {
    return redirect(route("series.index"));
})->name("index");

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/criar', [SeriesController::class, 'create'])->name('series.create');
Route::post('/series/criar', [SeriesController::class, 'store'])->name('series.store');
Route::delete('/series/{serie}', [SeriesController::class, 'delete'])->name('series.delete');
