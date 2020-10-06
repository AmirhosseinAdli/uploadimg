<?php

use Illuminate\Support\Facades\Route;

#<domain>/test/ui/admin.pictures.create
Route::get('ui/{blade?}', function ($blade) {
    return view($blade);
});

