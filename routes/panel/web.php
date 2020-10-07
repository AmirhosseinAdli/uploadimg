<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/pictures', 'PictureController')->except('show');
Route::post('/pictures/{picture}','PictureController@test')->name('pictures.test');
Route::resource('/histories', 'HistoryController');




