<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PeliculasController::class, 'index'])->name('peliculas.index');

// Ruta para mostrar todoa los peliculas
Route::get('peliculas', [PeliculasController::class, 'peliculas'])->name('peliculas.peliculas');

// Ruta para mostrar una pelicula específico
Route::get('peliculas/{id}', [PeliculasController::class, 'show'])->name('peliculas.show');

// Rutas para la creación, modificación y eliminación de peliculas
Route::get('create', [PeliculasController::class, 'create'])->name('peliculas.create');
Route::post('peliculas', [PeliculasController::class, 'store'])->name('peliculas.store');
Route::get('peliculas/{id}/edit', [PeliculasController::class, 'edit'])->name('peliculas.edit');
Route::put('peliculas/{id}', [PeliculasController::class, 'update'])->name('peliculas.update');
Route::delete('peliculas/{id}', [PeliculasController::class, 'destroy'])->name('peliculas.destroy');
Route::get('peliculas/{id}/delete', [PeliculasController::class, 'confirmDelete'])->name('peliculas.confirmDelete');
Route::get('peliculas/json', [PeliculasController::class, 'downloadAll'])->name('peliculas.downloadAll');
Route::get('peliculas/{id}/json', [PeliculasController::class, 'download'])->name('peliculas.download');