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

Route::get('/', function () {
    return view('auth/login');
});

//Route::get('/jefedepartamento', 'jefedepartamentocontroller@index');
//Route::get('/jefedepartamento/create', 'jefedepartamentocontroller@create');
//Route::get('/jefedepartamento/edit', 'jefedepartamentocontroller@edit');

Route::resource('/jefedepartamento', 'jefedepartamentocontroller');

//la linea inferior sirve para desactivar las views.
Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
