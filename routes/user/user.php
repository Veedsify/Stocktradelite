<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;


// Index Pages
Route::get('/user', [UserController::class, "user"])->name("user");
