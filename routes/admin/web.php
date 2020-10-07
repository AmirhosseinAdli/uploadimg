<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('pictures', 'PictureController');
Route::post('pictures/{picture}', 'PictureController@expire')->name('pictures.expire');
Route::resource('histories', 'HistoryController')->only(['index', 'show', 'destroy']);



