<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\WithdrawalController;
use App\Http\Controllers\user\NotificationController;
use App\Http\Controllers\user\TradeHistoryController;
use App\Http\Controllers\user\ChangePasswordController;
use App\Http\Controllers\user\UpgradeAccountController;


// Index Pages
Route::get('/user', [UserController::class, "user"])->name("user");
Route::get('/user/deposit', [DepositController::class, "deposit"])->name("deposit");
Route::get('/user/withdrawal', [WithdrawalController::class, "withdrawal"])->name("withdrawal");
Route::get('/user/trade-history', [TradeHistoryController::class, "tradeHistory"])->name("tradehistory");
Route::get('/user/upgrade-account', [UpgradeAccountController::class, "upgradeAccount"])->name("upgradeaccount");
Route::get('/user/profile', [ProfileController::class, "profile"])->name("profile");
Route::get('/user/change-password', [ChangePasswordController::class, "changePassword"])->name("changepassword");
Route::get('/user/notification', [NotificationController::class, "notification"])->name("notification");

