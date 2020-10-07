<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/pictures', 'PictureController')->except('show');
Route::post('/pictures/{picture}','PictureController@expire')->name('pictures.expire');
Route::resource(s'/histories', 'HistoryController');




