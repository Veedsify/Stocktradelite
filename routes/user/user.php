<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\WithdrawalController;


// Index Pages
Route::get('/user', [UserController::class, "user"])->name("user");
Route::get('/deposit', [DepositController::class, "deposit"])->name("deposit");
Route::get('/withdrawal', [WithdrawalController::class, "withdrawal"])->name("withdrawal");

