<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', fn () => view('pages.home'))
    ->name('home');

Route::get('/catalogo', fn () => view('pages.catalog'))
    ->name('catalog');

Route::get('/animal/{uuid}', fn () => view('pages.animal'))
    ->name('animal');
