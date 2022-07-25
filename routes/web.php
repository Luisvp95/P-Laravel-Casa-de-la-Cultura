<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\VentacursoController;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('/auth/login');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(['middleware'=> ['auth']], function(){
    Route::resource('libros', LibroController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('personas', PersonaController::class);
    Route::resource('prestamos', PrestamoController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('roles', RolController::class);
    Route::resource('cursos', CursoController::class);
    Route::resource('contenidos', ContenidoController::class);
    Route::resource('horarios', HorarioController::class);
    Route::resource('autors', AutorController::class);
    Route::resource('ventacursos', VentacursoController::class);
    });



