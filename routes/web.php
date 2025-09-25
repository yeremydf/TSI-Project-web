<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Libro;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    $libros = Libro::with(['autor', 'genero'])->get();
    return view('home', compact('libros'));
})->middleware('auth');

Route::resource('libros', LibroController::class);


Route::get('/buscar-libro', [LibroController::class, 'buscarLibro'])->name('buscar-libro');