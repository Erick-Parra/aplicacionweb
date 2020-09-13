<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('inicio');
Route::view('/junta-directiva','partials.Quienes Somos.JuntaDirectiva')->name('JuntaDirectiva');
Route::view('/funcionarios','partials.Quienes Somos.Funcionarios')->name('Funcionarios');

Route::view('/serviciosAdmi','partials.servicios.servicesAdmi')->name('servicesAdmi');
Route::view('/serviciosLegal','partials.servicios.servicesTecn')->name('servicesTecn');
Route::view('/serviciosTecn','partials.servicios.servicesLegal')->name('servicesLegal');

Route::view('/informacion','info')->name('info');
Route::view('/contactenos','contact')->name('contact');

//Rutas controlador registro con diferente rutas, /admin
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/crear','AdminController@create')->name('create');
Route::get('/admin/{asada}/editar','AdminController@edit')->name('admin.edit');
Route::patch('/admin/{asada}','AdminController@update')->name('admin.update');
Route::post('/admin','AdminController@store')->name('create.store');
Route::get('/admin/{asada}','AdminController@show')->name('admin.show');
Route::delete('/admin/{asada}', 'AdminController@destroy')->name('admin.destroy');

//Rutas controlador mapeo con diferente rutas
Route::get('/admapeo/crearmapeo','ControllerMap@create')->name('map');
Route::post('/admapeo','ControllerMap@store')->name('map.store');

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
