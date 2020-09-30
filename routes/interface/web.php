<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/validate','ValidateController@index');
Route::get('/view','ViewController@index');
