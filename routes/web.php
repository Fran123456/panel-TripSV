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
  //  return view('welcome');
    return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//unidades
route::resource('unidad','transporte\transporteController');
route::post('/updateUnidad/{id}','transporte\transporteController@update')->name('updateUnidad');
//unidades



//rutas para usuario
route::resource('usuario','user\userController');
route::post('/updateUsuario/{id}','user\userController@update')->name('updateUsuario');
//rutas para usuario



//perfil y edicion de perfil
Route::resource('Perfil', 'user\perfilController');
route::post('/updatePerfil/{id}','user\perfilController@update')->name('updatePerfil');
//perfil y edicion de perfil


//guia turistico
Route::get('/guias-turisticos', 'Guia\GuiaTuristicosController@index')->name('guias-turisticos');
Route::get('/Nuevo-Guia', 'Guia\GuiaTuristicosController@create')->name('Nuevo-Guia');
Route::delete('/Guia.destroy/{id}','Guia\GuiaTuristicosController@destroy')->name('Guia.destroy');
Route::post('/Guia.store','Guia\GuiaTuristicosController@store')->name('Guia.store');
//guia turistico
