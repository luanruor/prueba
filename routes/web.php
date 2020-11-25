<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ControladorPaginas@Inicio');

Route::get('RegistroExitoso', 'ControladorPaginas@RegistroExitoso');

Route::get('Prueba', 'ControladorPaginas@Prueba');

Route::post('/', 'ControladorPaginas@Crear')->name('departamento.crear');