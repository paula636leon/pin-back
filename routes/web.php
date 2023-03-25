<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('form', [FormController::class, 'index']);

Route::get('form', 'App\Http\Controllers\FormController@index');

Route::post('guardar', [FormController::class, 'guardar']);

//Route::post('guardar', 'App\Http\Controllers\FormController@guardar');

//Route::post('guardar','FormController@FormCliente')->name('guardar');