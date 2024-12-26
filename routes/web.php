<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;

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



Route::get('/', [paginacontroller::Class, 'Inicio']);

//ruta mision y vision
Route::get('/MisVis',[MisVIsControler::class, 'index']);
Route::get('/create2', [MisVIsControler::class, 'create2']);
Route::get('/editMisVis', [MisVIsControler::class, 'editMisVis']);
Route::post('/store', [MisVIsControler::class, 'store']);
