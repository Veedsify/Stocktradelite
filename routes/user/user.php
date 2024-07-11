<?php

use App\Http\Controllers\user\ChangePasswordController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\NotificationController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\TradeHistoryController;
use App\Http\Controllers\user\UpgradeAccountController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\WithdrawalController;
use Illuminate\Support\Facades\Route;

// Index Pages

Route::prefix("user")->middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, "user"])->name("user");
    Route::get('/deposit', [DepositController::class, "deposit"])->name("deposit");
    Route::get('/withdrawal', [WithdrawalController::class, "withdrawal"])->name("withdrawal");
    Route::get('/trade-history', [TradeHistoryController::class, "tradeHistory"])->name("tradehistory");
    Route::get('/upgrade-account', [UpgradeAccountController::class, "upgradeAccount"])->name("upgradeaccount");
    Route::get('/profile', [ProfileController::class, "profile"])->name("profile");
    Route::get('/change-password', [ChangePasswordController::class, "changePassword"])->name("changepassword");
    Route::get('/notification', [NotificationController::class, "notification"])->name("notification");
});
