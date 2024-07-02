<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) return redirect(route("index"));
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect(route("index"));
        } else {
            return redirect(route("index"));
        }
    }
}
