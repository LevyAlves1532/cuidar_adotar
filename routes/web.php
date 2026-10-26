<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'home'])
    ->name('home');

Route::get('/catalogo', [PagesController::class, 'catalog'])
    ->name('catalog');

Route::get('/animal/{animalId}', [PagesController::class, 'animal'])
    ->name('animal');
