<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something gre at!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleado','EmpleadoController');

Auth::routes();

Route::get('/home', 'EmpleadoController@index');

Route::get('/inicio', function () {
    return view('inicio');
});