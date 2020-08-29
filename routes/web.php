<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('inicio');
Route::view('/quienes-somos','who')->name('who');

Route::view('/serviciosAdmi','partials.servicios.servicesAdmi')->name('services');
Route::view('/serviciosTecn','partials.servicios.servicesLegal')->name('servicesTecn');
Route::view('/serviciosLegal','partials.servicios.servicesTecn')->name('servicesLegal');

Route::view('/informacion','info')->name('info');
Route::view('/contactenos','contact')->name('contact');

Route::view('/admin','admin.index')->name('admin');
Route::view('/crear-asada','admin.createasada')->name('crearasada');



Auth::routes();
