<?php

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

Route::get('/estudiantes/index', function () {
    return view('index');
});

//Estudiantes
Route::prefix('/estudiantes/')
    ->namespace('Estudiantes\Configuracion')
    ->group( function(){
        
        //estudiantes
        Route::get('estudiantes','EstudiantesController@index');

    });
