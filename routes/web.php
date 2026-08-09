<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return redirect()->route('lugares.index');
});

Route::get('/lugares', [LugarController::class, 'index'])
    ->name('lugares.index');

Route::get('/lugares/{id}', [LugarController::class, 'show'])
    ->name('lugares.show');

Route::get('/contacto', [ContactoController::class, 'create'])
    ->name('contacto.create');

Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');