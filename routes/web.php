<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Models\Inicio;

Route::get('/', function () {
    return view('modulos.Seleccionar');
});

Route::get('/ingresar', function () {
    return view('modulos.Ingresar');
});

Auth::routes();

Route::get('Inicio',[InicioController::class, 'index']);

