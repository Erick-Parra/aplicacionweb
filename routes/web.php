<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('inicio');
Route::view('/junta-directiva','partials.Quienes Somos.JuntaDirectiva')
->name('JuntaDirectiva');
Route::view('/funcionarios','partials.Quienes Somos.Funcionarios')->name('Funcionarios');

Route::view('/serviciosAdmi','partials.servicios.servicesAdmi')->name('servicesAdmi');
Route::view('/serviciosLegal','partials.servicios.servicesTecn')->name('servicesTecn');
Route::view('/serviciosTecn','partials.servicios.servicesLegal')->name('servicesLegal');

Route::view('/informacion','info')->name('info');
Route::view('/contactenos','contact')->name('contact');

Route::view('/admin','admin.index')->name('admin');
Route::view('/crear-asada','admin.createasada')->name('crearasada');



Auth::routes();
