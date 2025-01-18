<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login'); // Pagina principal ---> Login
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Login

Route::get('/register', [AuthController::class, 'showRegister'])->name('register'); // Página registro
Route::post('/register', [AuthController::class, 'register'])->name('register.post'); // Registro

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile'); //  ver Perfil
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // salir
});