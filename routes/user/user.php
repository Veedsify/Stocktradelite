<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;


// Index Pages
Route::get('/user', [UserController::class, "user"])->name("user");
<<<<<<< HEAD
Route::get('/deposit', [UserController::class, "deposit"])->name("deposit");

=======
>>>>>>> 69dd5d3dcee9b6111c1c44c08fbd93ee2f982444
