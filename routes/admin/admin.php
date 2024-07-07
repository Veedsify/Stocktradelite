<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MailController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\BalanceController;



// Index Pages
Route::get('/admin', [AdminController::class, "admin"])->name("admin");
Route::get('/admin/mail', [MailController::class, "mail"])->name("mail");
Route::get('/admin/users', [UsersController::class, "users"])->name("users");
Route::get('/admin/users/balance/{id}', [BalanceController::class, "editBalance"])->name("admin.balance.editbalance");


