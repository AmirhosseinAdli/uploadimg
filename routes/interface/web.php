<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/','ViewController@homepage')->name('homepage');
Route::get('/{slug}','ViewController@view')->name('view');
Route::post('/validate','ViewController@check')->name('check');
