    <?php

use Illuminate\Support\Facades\Route;

Route::get('/validate',[ValidateController::class,'index']);

Route::get('/view',[ViewController::class,'index']);
