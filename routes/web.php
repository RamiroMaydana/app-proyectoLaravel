<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de Autenticacion
// Registro de Usuario - Personalizado
Route::get("/registro", [AuthController::class, "registrarse"])->name("miRegistro"); // registrarse en Auth controller
// Recibir informacion
Route::post("/registro", [AuthController::class, "guardarUsuario"])->name("guardarUsuario");

