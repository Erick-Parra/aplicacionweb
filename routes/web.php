<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/quienes-somos','who')->name('who');

Route::view('/servicios','services')->name('services');
Route::view('/Administrativos','services')-> name ('services');
Route::view('/Técnicos','services')-> name ('services');
Route::view('/Legales','services')-> name ('services');

Route::view('/informacion','info')->name('info');
Route::view('/contactenos','contact')->name('contact');

Route::view('/admin','admin.index')->name('admin');



Auth::routes(['register' => false]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
