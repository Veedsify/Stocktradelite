<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BalanceController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\MailController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PrivacyController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SecurityController;
use App\Http\Controllers\admin\TermsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\WalletController;
use App\Http\Controllers\user\ChangePasswordController;
use App\Http\Controllers\user\KycController;
use App\Http\Controllers\user\NotificationController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;

// Index Pages
Route::prefix("admin")->middleware(["admin"])->group(function () {
    Route::get("/", [AdminController::class, "admin"])->name("admin");
    // Mail
    Route::get("/mail", [MailController::class, "mail"])->name("mail");
    Route::post("/sendmail", [MailController::class, "sendmail"])->name("sendmail");

    // users
    Route::get("/users", [UsersController::class, "users"])->name("users");
    Route::put('/admin/users/{userId}/upgrade', [UsersController::class, 'upgradeUser'])->name('admin.users.upgrade');



    Route::get("/users/balance/{id}", [BalanceController::class, "editBalance"])->name("admin.balance.editbalance");
    Route::get("/security", [SecurityController::class, "security"])->name("admin.security");
    Route::get("/profile", [ProfileController::class, "profile"])->name("admin.profile");
    Route::get("/wallet-btc", [WalletController::class, "btc"])->name("admin.btc");
    Route::get("/wallet-eth", [WalletController::class, "eth"])->name("admin.eth");

    // Privacy
    Route::get("/privacy", [PrivacyController::class, "privacy"])->name("admin.privacy");
    Route::post("/privacy-policy-content", [PrivacyController::class, 'updatePolicyContent'])->name("admin.settings.update.privacy.policy");



    // Terms Condition
    Route::get("/terms-condition", [TermsController::class, "termsCondition"])->name("admin.terms");
    Route::post("/Update-terms-condition", [TermsController::class, "updateTermsCondition"])->name("admin.settings.update.terms.condition");



    Route::get("/notification", [NotificationController::class, "notificationAdmin"])->name("admin.notification");

    // order
    Route::get("/deposits/{id}", [OrderController::class, "orders"])->name("admin.orders");
    Route::post("/deposits/edit/{id}/{tier}", [OrderController::class, "updateOrder"])->name("admin.deposit.update");

    // Change Password
    Route::post('/admin/change-password', [ChangePasswordController::class, "changePasswordSubmit"])->name("changepassword.admin");

    // blog
    Route::get('/blog/all', [BlogController::class, "allBlog"])->name("admin.all.blog");
    Route::get('/blog/create', [BlogController::class, "newBlog"])->name("admin.new.blog");
    Route::post("/create/new", [BlogController::class, "newarticle"])->name("blog.new.article");

    Route::get('/kyc-center', [KycController::class, 'kycCenter'])->name('admin.kyc');
    Route::post('/kyc-center-update/{id}', [KycController::class, 'kycUpdates'])->name('admin.kyc-center.update');

    // Profits
    Route::post('/trades/{id}', [BalanceController::class, 'editTrades'])->name('admin.trades.edit');
    Route::post('/profits/{id}', [BalanceController::class, 'editProfits'])->name('admin.profits.edit');
    Route::post('/balance/{id}', [BalanceController::class, 'updateBalance'])->name('admin.balance.edit');

    // Withdrawal
    Route::get( '/withdrawals', [WithdrawController::class, 'allWithDrawals'])->name('admin.withdrawals');





});
