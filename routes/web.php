<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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

// Esta ruta es la ruta principal de la aplicación.
Route::get('/', [HomeController::class, 'index'])->name('home');
// Esta ruta es la ruta que muestra la noticia en base al id.
Route::get('/post/{id}', [HomeController::class, 'show'])->name('post.show');

// La función middleware('auth') permite proteger las rutas para que solo puedan ser accedidas
Auth::routes();

// Esta ruta es la ruta que muestra los usuarios.
Route::get('/usuarios', [UsersController::class, 'index'])
->name('usuarios.index')
->middleware('auth');

// Las rutas resources son rutas que permiten realizar todas las operaciones CRUD
// sobre un recurso en una sola línea de código.
Route::resource('articulos', ArticulosController::class);