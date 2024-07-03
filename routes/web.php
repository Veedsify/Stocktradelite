<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PrivacyController;


//Admin Routes
require_once  __DIR__ . '/user/user.php';
// Index Pages
Route::get('/', [IndexController::class, "index"])->name("index");
Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");


// Blogs
Route::get("/blogs", [BlogController::class, "blogs"])->name("blogs");
Route::get("/blog/{id}", [BlogController::class, "blog"])->name("blog.single");
Route::get("/markets", [MarketController::class, "markets"])->name("markets");

// ABout
Route::get("/about", [AboutController::class, "about"])->name("about");

// Contact
Route::get('get-in-touch', [ContactController::class, 'getInTouch'])->name('contact');


// Terms Of Use
Route::get("/terms-of-use", [TermsController::class, "terms"])->name("terms-of-use");

// Privacy Controller
Route::get("/privacy-policy", [PrivacyController::class, "privacy"])->name("privacy.policy");

// FAQ
Route::get("/faq", [FAQController::class, "faq"])->name("faq");
