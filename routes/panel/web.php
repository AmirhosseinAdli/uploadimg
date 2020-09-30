    <?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PictureController;

Route::resource('/admin',AdminController::class);

Route::resource('/user',UserController::class);



