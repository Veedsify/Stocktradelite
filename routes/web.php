<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\VerifyController;
use Illuminate\Support\Facades\Route;

//Admin Routes
require_once __DIR__ . '/user/user.php';
require_once __DIR__ . '/admin/admin.php';
// Index Pages
Route::get('/', [IndexController::class, "index"])->name("index");

Route::prefix("/login")->group(function () {
    Route::get("/", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "loginUser"])->name("login.user");
});

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::prefix("register")->group(function () {
    Route::get("/", [AuthController::class, "register"])->name("register");
    Route::post("/new", [AuthController::class, "registerNew"])->name("register.new");
});
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

//Recovery Account
Route::get("/recovery", [RecoveryController::class, "recovery"])->name("recovery");

//Verify Account
Route::get("/verify/{token}", [VerifyController::class, "verify"])->name("verify");

Route::post("/verify", [VerifyController::class, "verifyAccount"])->name("verify.account");

// Email Template
Route::get('/welcome-email', function () {
    return view("email-templates.welcome-email");
});

Route::get('/withdraw-request', function () {
    return view("email-templates.withdrawal-request");
});

Route::get('/withdrawal-approved', function () {
    return view("email-templates.withdrawal-approved");
});

Route::get('/deposit', function () {
    return view("email-templates.deposit");
});
Route::get('/confirmation-code', function () {
    return view("email-templates.confirmation-code");
});
Route::get('/custom-mail', function () {
    return view("email-templates.custom-mail");
});
Route::get('/kyc', function () {
    return view("email-templates.kyc");
});
