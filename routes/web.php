<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('inicio');
Route::view('/junta-directiva','partials.Quienes Somos.JuntaDirectiva')->name('JuntaDirectiva');
Route::view('/funcionarios','partials.Quienes Somos.Funcionarios')->name('Funcionarios');

Route::view('/serviciosAdmi','partials.servicios.servicesAdmi')->name('servicesAdmi');
Route::view('/serviciosLegal','partials.servicios.servicesTecn')->name('servicesTecn');
Route::view('/serviciosTecn','partials.servicios.servicesLegal')->name('servicesLegal');

Route::view('/informacion','info')->name('info');
Route::view('/noticias','partials.informacion.noticias')->name('news');
Route::view('/contactenos','contact')->name('contact');

//Rutas controlador registro con diferente rutas, /admin
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/crear','AdminController@create')->name('create');
Route::get('/admin/{asada}/editar','AdminController@edit')->name('admin.edit');
Route::patch('/admin/{asada}','AdminController@update')->name('admin.update');
Route::post('/admin','AdminController@store')->name('create.store');
Route::get('/admin/{asada}','AdminController@show')->name('admin.show');
Route::delete('/admin/{asada}', 'AdminController@destroy')->name('admin.destroy');

Route::get('/buscaras/buscarasada','AdminController@buscar')->name('buscaras');
Route::get('/searchasada','AdminController@index')->name('searchasada');

// Rutas Junta Directiva
Route::get('/buscar/buscarjunta','juntaController@buscar')->name('buscarjunta');
Route::get('/editarjunta/{idjunta}', 'juntaController@editarjunta' )->name('editar');
Route::put('/editarjunta/{idjunta}', 'juntaController@update' )->name('update');


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

//Publicaciones
Route::get('/pub/crearpub','PostsController@create')->name('pub');
Route::post('/pub','PostsController@store')->name('pub.store');

Route::get('/buscarpub/pubuscar','PostsController@buscar')->name('buscarpub');

Route::get('/editarpub/{idpub}','PostsController@editar')->name('pub.editar');
Route::put('/editarpub/{idpub}','PostsController@update')->name('pub.update');

Route::delete('/eliminarpub/{idpub}', 'PostsController@eliminar')->name('pub.eliminar');



Auth::routes();
