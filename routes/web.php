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
Route::resource('guia', 'Guia\GuiaTuristicosController');
route::post('/updateGuia/{id}','Guia\GuiaTuristicosController@update')->name('updateGuia');
route::get('/foto/{id}','Guia\GuiaTuristicosController@viewfoto')->name('foto');
route::post('/updateFoto/{id}','Guia\GuiaTuristicosController@updateFoto')->name('updateFoto');
//guia turistico



//guia paquetes
Route::resource('paquete', 'paquete\PaqueteController');
route::post('/paqueteUpdate/{id}','paquete\PaqueteController@update')->name('paqueteUpdate');
//guia paquetes




//guia post
Route::resource('blog', 'post\PostController');
route::post('/updateblog/{id}','post\PostController@update')->name('updateblog');
//guia post


//guia multimedia
Route::resource('multimedia', 'Multimedia\MultimediaController');

route::get('/create-multimedia/{id}','Multimedia\MultimediaController@multimedia_paquete')->name('createmultimedia');

route::post('/updatemultimedia/{id}','Multimedia\MultimediaController@update')->name('updatemultimedia');
route::get('/getpaquetes','Multimedia\MultimediaController@get_paquetes')->name('getpaquetes');

//guia multimedia


//noty
Route::get('/notify', 'noty\NotificationController@index')->name('noty');