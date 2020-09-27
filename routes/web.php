<?php

use App\Models\Artigo;
use Illuminate\Support\Facades\Route;

// Simple routes

Route::view('/', 'inicio')->name('inicio');
Route::view('/sobre-nos', 'sobre-nos')->name('sobre-nos');
Route::view('/videos', 'videos')->name('videos');
Route::view('/blog', 'blog', ['artigos' => Artigo::all()])->name('blog');
Route::get('artigo/{id}', function ($id) {
    return view('artigo', ['artigo' => Artigo::find($id)]);
})->name('artigo');
