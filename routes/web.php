<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', [FormularioController::class, 'formulario']);

Route::post('/guardar', [FormularioController::class, 'guardar'])
    ->name('guardar');