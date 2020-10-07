<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home/upload_now',function (){
    return view('panel.dashboard');
})->name('home.upload_now');

Route::resource('/token','TokenController');

Route::get('/','ViewController@homepage')->name('homepage');
Route::get('/{slug}','ViewController@view')->name('view');
Route::post('/validate','ViewController@check')->name('check');
