<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Habilita la verificación de correo electrónico en las rutas de autenticación
Auth::routes(['verify' => true]);

// Ruta de bienvenida predeterminada
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard protegida por autenticación y verificación de correo
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para el perfil del usuario protegidas por autenticación y verificación
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rutaa CRUD para usuarios
    Route::resource('usuarios', UserController::class);

    // Rutas CRUD para eventos que requieren verificación de correo
    Route::resource('eventos', EventoController::class);

    // Ruta adicional para mostrar los comentarios de un evento
    Route::get('eventos/{evento}/comentarios', [EventoController::class, 'showComentarios'])->name('eventos.comentarios');
});

// Rutas de autenticación
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
