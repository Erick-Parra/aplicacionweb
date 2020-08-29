<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('inicio');
Route::view('/quienes-somos','who')->name('who');

Route::view('/serviciosAdmi','services')->name('services');
Route::view('/serviciosTecn','servicesTecn')->name('servicesTecn');
Route::view('/serviciosLegal','servicesLegal')->name('servicesLegal');

Route::view('/informacion','info')->name('info');
Route::view('/contactenos','contact')->name('contact');

Route::view('/admin','admin.index')->name('admin');



Auth::routes(['register' => false]);
