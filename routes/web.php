<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('inicio');
Route::view('/junta-directiva','partials.Quienes Somos.JuntaDirectiva')->name('JuntaDirectiva');
Route::view('/funcionarios','partials.Quienes Somos.Funcionarios')->name('Funcionarios');

Route::view('/serviciosAdmi','partials.servicios.servicesAdmi')->name('servicesAdmi');
Route::view('/serviciosLegal','partials.servicios.servicesTecn')->name('servicesTecn');
Route::view('/serviciosTecn','partials.servicios.servicesLegal')->name('servicesLegal');

Route::view('/informacion','info')->name('info');
Route::view('/noticias','news')->name('news');
Route::view('/contactenos','contact')->name('contact');

//Rutas controlador registro con diferente rutas, /admin
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/crear','AdminController@create')->name('create');
Route::post('/admin','AdminController@store')->name('create.store');

//Rutas controlador mapeo con diferente rutas
Route::get('/admapeo/crearmapeo','ControllerMap@create')->name('map');
Route::post('/admapeo','ControllerMap@store')->name('map.store');

Route::get('/buscarmapeo/mapbuscar','ControllerMap@buscar')->name('buscarmap');
Route::get('/searchmap','ControllerMap@index')->name('searchmap');

//CRUD Mapeo
Route::get('/editarmapeo/{idmap}','ControllerMap@editar')->name('mapeos.editar');
Route::put('/editarmapeo/{idmap}','ControllerMap@update')->name('mapeos.update');

Route::delete('/eliminarmapeo/{idmap}', 'ControllerMap@eliminar')->name('mapeos.eliminar');

//Rutas controlador control operativo con diferente rutas /administracion
Route::get('/adcontrolop/crearbitacora', 'BitacoraController@create')->name('bitacora');
Route::post('/adcontrolop', 'BitacoraController@store')->name('bitacora.store');


Route::get('/buscar/buscarbitacora','BitacoraController@buscar')->name('buscar');
Route::get('/search','BitacoraController@index')->name('search');

//CRUD CONTROL OPERATIVO
Route::get('/editar/{id}', 'BitacoraController@editar' )->name('notas.editar');
Route::put('/editar/{id}', 'BitacoraController@update' )->name('notas.update');

Route::delete('/eliminar/{id}', 'BitacoraController@eliminar')->name('notas.eliminar');



Auth::routes();
