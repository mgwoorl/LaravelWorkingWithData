<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SongController;

Route::resource('authors', AuthorController::class);
Route::resource('songs', SongController::class);