<?php

use App\Http\Controllers\admin\WalletController;
use App\Http\Controllers\user\ChangePasswordController;
use App\Http\Controllers\user\DepositController;
use App\Http\Controllers\user\KycController;
use App\Http\Controllers\user\NotificationController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\TradeHistoryController;
use App\Http\Controllers\user\UpgradeAccountController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\WithdrawalController;
use App\Http\Controllers\WithdrawController as ProcessWithdrawalController;
use Illuminate\Support\Facades\Route;

// Index Pages

Route::prefix("user")->middleware(["auth"])->group(function () {
    Route::middleware(["users"])->group(function () {
        Route::get('/', [UserController::class, "user"])->name("user");
        Route::get('/deposit', [DepositController::class, "deposit"])->name("deposit");
        Route::get('/withdrawal', [WithdrawalController::class, "withdrawal"])->name("withdrawal");
        Route::get('/trade-history', [TradeHistoryController::class, "tradeHistory"])->name("tradehistory");
        Route::get('/upgrade-account', [UpgradeAccountController::class, "upgradeAccount"])->name("upgradeaccount");
        Route::get('/profile', [ProfileController::class, "profile"])->name("profile");
        Route::get('/notification', [NotificationController::class, "notification"])->name("notification");

        // Change Password
        Route::get('/change-password', [ChangePasswordController::class, "changePassword"])->name("changepassword");
        Route::post('/change-password', [ChangePasswordController::class, "changePasswordSubmit"])->name("changepassword.submit");

        // Withdrawal
        Route::post('/withdrawal/bitcoin', [ProcessWithdrawalController::class, "processBitcoinWithdraw"])->name("withdrawal.bitcoin");
        Route::post('/withdrawal/ethereum', [ProcessWithdrawalController::class, "processEthereumWithdraw"])->name("withdrawal.ethereum");
        Route::post('/withdrawal/bank', [ProcessWithdrawalController::class, "processBankWithdraw"])->name("withdrawal.bank");
        Route::post('/withdrawal/card', [ProcessWithdrawalController::class, "processCardWithdraw"])->name("withdrawal.card");

        // Wallet Address
        Route::post('/wallet-address/btc', [WalletController::class, "walletAddressBtc"])->name("walletaddress.submit.btc");
        Route::post('/wallet-address/eth', [WalletController::class, "walletAddressEth"])->name("walletaddress.submit.eth");
    });

    // KYC Verification
    Route::get('/kyc', [KycController::class, "kyc"])->name("kyc");
    Route::post('/kyc', [KycController::class, "kycSubmit"])->name("kyc.submit");
});
