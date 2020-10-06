<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UserController');
Route::resource('/pictures', 'PictureController');
Route::resource('/histories', 'HistoryController');



