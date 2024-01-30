<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\LoginRegister;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/formulario', [FormularioController::class, 'index'])->name('formulario');
Route::post('/generar-pagina', [FormularioController::class, 'generarPagina']);

Route::post('/guardar-mensaje', [IndexController::class, 'guardarMensaje']);

Route::view('login', 'livewire.home');




