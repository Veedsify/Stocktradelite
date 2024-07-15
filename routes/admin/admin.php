<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\MailController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\TermsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\WalletController;
use App\Http\Controllers\admin\BalanceController;
use App\Http\Controllers\admin\PrivacyController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SecurityController;
use App\Http\Controllers\user\NotificationController;



// Index Pages
Route::get('/admin', [AdminController::class, "admin"])->name("admin");
Route::get('/admin/mail', [MailController::class, "mail"])->name("mail");
Route::get('/admin/users', [UsersController::class, "users"])->name("users");
Route::get('/admin/users/balance/{id}', [BalanceController::class, "editBalance"])->name("admin.balance.editbalance");
Route::get('/admin/security', [SecurityController::class, "security"])->name("admin.security");
Route::get('/admin/profile', [ProfileController::class, "profile"])->name("admin.profile");
Route::get('/admin/wallet-btc', [WalletController::class, "btc"])->name("admin.btc");
Route::get('/admin/wallet-eth', [WalletController::class, "eth"])->name("admin.eth");
Route::get('/admin/privacy', [PrivacyController::class, "privacy"])->name("admin.privacy");
Route::get('/admin/terms-condition', [TermsController::class, "termsCondition"])->name("admin.terms");
Route::get('/admin/notification', [NotificationController::class, "notificationAdmin"])->name("admin.notification");
Route::get('/admin/blog/all', [BlogController::class, "all-blog"])->name("admin.blog");




