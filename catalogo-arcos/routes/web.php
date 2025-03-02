<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArcoController;

// Ruta principal (accesible para todos)
Route::get('/', [ArcoController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas
Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Todas las del CRUD excepto index y show que serán públicas
    Route::resource('arcos', ArcoController::class)->except(['index', 'show']);
});

// Rutas públicas de arcos (accesibles para todos)
Route::resource('arcos', ArcoController::class)->only(['index', 'show']);

// Rutas de autenticación (generadas por Breeze)
require __DIR__.'/auth.php';
