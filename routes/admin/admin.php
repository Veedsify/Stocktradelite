<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;



// Index Pages
Route::get('/admin', [AdminController::class, "admin"])->name("admin");


