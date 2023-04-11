<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UsuariosController::class)->group(function(){
    Route::get('usuarios','usuarios')->name('usuarios');
    Route::post('usuarios/search','buscar_usuarios')->name('usuarios.search');
    Route::get('alta_usuario','alta_usuario')->name('alta_usuario');
    Route::post('guardar_usuario','guardar_usuario')->name('guardar_usuario');
    Route::get('actualizar_usuario/{id}','actualizar_usuario')->name('actualizar_usuario');
    Route::post('usuario_actualizado','usuario_actualizado')->name('usuario_actualizado');
});


// Route::get('usuarios', [UsuariosController::class, 'usuarios']);
// Route::get('usuarios/list', [UsuariosController::class, 'getusuarios'])->name('usuarios.list');