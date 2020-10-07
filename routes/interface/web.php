<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/home/upload_now',function (){
    return view('panel.dashboard');
})->name('home.upload_now');

Route::get('/','ViewController@homepage')->name('homepage');
Route::get('/{slug}','ViewController@view')->name('view');
Route::post('/validate','ViewController@check')->name('check');
