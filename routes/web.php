<?php

use Illuminate\Support\Facades\Route;

//AGREGAMOS LOS CONTROLADORES
//PRIMERO EL CONTROLADOR EXISTENTE HOMECONTROLLER
use App\Http\Controllers\HomeController;
//AHORA LOS CONTROLADORES QUE VAMOS A CREAR
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SolicitudController;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//AGREGAMOS LAS RUTAS DE LOS CONTROLADORES DE TIPO RECURSO
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('categorias',CategoriaController::class);
    Route::resource('productos',ProductoController::class);
    Route::resource('solicitudes',SolicitudController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
