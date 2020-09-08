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

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/crear','AdminController@create')->name('create');
Route::post('/admin','AdminController@store')->name('create.store');

Route::get('/admapeo/crearmapeo','ControllerMap@create')->name('map');
Route::post('/admapeo','ControllerMap@store')->name('map.store');


Auth::routes();
