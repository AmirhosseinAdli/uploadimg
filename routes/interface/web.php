<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/','ViewController@homepage')->name('homepage');
Route::get('/{slug}','ViewController@view')->name('view');
Route::post('/validate','ViewController@validate')->name('validate');
