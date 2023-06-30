<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\ComicController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [PageController::class, 'comics']);

Route::resource('comics', ComicController::class);
