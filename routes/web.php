<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

