<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BalanceController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\MailController;
use App\Http\Controllers\admin\PrivacyController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SecurityController;
use App\Http\Controllers\admin\TermsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\WalletController;
use App\Http\Controllers\user\ChangePasswordController;
use App\Http\Controllers\user\KycController;
use App\Http\Controllers\user\NotificationController;
use Illuminate\Support\Facades\Route;

// Index Pages
Route::prefix("admin")->middleware(["admin"])->group(function () {
    Route::get("/", [AdminController::class, "admin"])->name("admin");
    Route::get("/mail", [MailController::class, "mail"])->name("mail");
    Route::get("/users", [UsersController::class, "users"])->name("users");
    Route::get("/users/balance/{id}", [BalanceController::class, "editBalance"])->name("admin.balance.editbalance");
    Route::get("/security", [SecurityController::class, "security"])->name("admin.security");
    Route::get("/profile", [ProfileController::class, "profile"])->name("admin.profile");
    Route::get("/wallet-btc", [WalletController::class, "btc"])->name("admin.btc");
    Route::get("/wallet-eth", [WalletController::class, "eth"])->name("admin.eth");
    Route::get("/privacy", [PrivacyController::class, "privacy"])->name("admin.privacy");
    Route::get("/terms-condition", [TermsController::class, "termsCondition"])->name("admin.terms");
    Route::get("/notification", [NotificationController::class, "notificationAdmin"])->name("admin.notification");

    // Change Password
    Route::post('/admin/change-password', [ChangePasswordController::class, "changePasswordSubmit"])->name("changepassword.admin");

    // blog
    Route::get('/blog/all', [BlogController::class, "allBlog"])->name("admin.all.blog");
    Route::get('/blog/create', [BlogController::class, "newBlog"])->name("admin.new.blog");

    Route::get('/kyc-center', [KycController::class, 'kycCenter'])->name('admin.kyc');
    Route::post('/kyc-center-update/{id}', [KycController::class, 'kycUpdates'])->name('admin.kyc-center.update');
});
