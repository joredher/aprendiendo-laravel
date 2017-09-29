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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show','HomeController@show');
Route::get('/', 'HomeController@index')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");

Route::get('/estudiantes/index', function () {
    return view('index');
});


Route::group(['middleware' => 'auth'], function () {
    //Route::get('permisos/roles/', 'Basicos\Permisos\RolesController@showRoles');
    Route::post('/permisos/roles/getroles', ['middleware' => ['permission:show_rol'], 'uses' => 'Basicos\Permisos\RolesController@obtenerRolesPaginado']);
    Route::get('permisos/permisos/', 'Basicos\Permisos\PermisosController@showPermisos');
    Route::post('/permisos/permisos/getpermisos', ['middleware' => ['permission:show_permiso'], 'uses' => 'Basicos\Permisos\PermisosController@obtenerPermisosPaginado']);


}    //Estudiantes
Route::prefix('/estudiantes')
    ->namespace('Estudiantes\Configuracion')
    ->group( function(){
        
        //estudiantes
        Route::get('estudiantes','EstudiantesController@index');

    });

Route::get('admin', function(){
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
