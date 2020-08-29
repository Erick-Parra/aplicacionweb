<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('inicio');
Route::view('/quienes-somos','who')->name('who');
Route::view('/servicios','services')->name('services');
Route::view('/informacion','info')->name('info');
Route::view('/contactenos','contact')->name('contact');

Route::view('/admin','admin.index')->name('admin');
Route::view('/crear-asada','admin.createasada')->name('crearasada');



Auth::routes();
