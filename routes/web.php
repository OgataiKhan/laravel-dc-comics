<?php

use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('comics', ComicController::class);