<?php

use Illuminate\Support\Facades\Route;

// Simple routes

Route::view('/', 'inicio')->name('inicio');
Route::view('/sobre-nos', 'sobre-nos')->name('sobre-nos');
Route::view('/videos', 'videos')->name('videos');