<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    return view('inicio');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::resource('/project', ProjectController::class);