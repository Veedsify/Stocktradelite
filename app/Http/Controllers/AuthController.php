<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmEmail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route("index"));
        }

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

    public function registerNew(Request $request)
    {
        $request->validate([
            "fullanme" => "required",
            "email" => "required|email|unique:users,email",
            "country" => "required",
            "phone" => "required",
            "password" => "required|min:6",
            "confirm_password" => "required|same:password",
        ]);

        try {

            $checkUsers = User::where("email", $request->email)->first();

            if ($checkUsers) {
                return back()->with("error", "Email already exists");
            }

            $verification_token = Str::random(120);
            $verification_code = rand(100000, 999999);

            $user = new User();
            $user->name = $request->fullanme;
            $user->email = $request->email;
            $user->country = $request->country;
            $user->phone = $request->phone;
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
            $user->role = "user";
            $user->verified = false;
            $user->tier = 1;
            $user->verification_code = $verification_code;
            $user->userid = "user_" . Str::random(10);
            $user->avatar = "user-assets/images/profile/user-" . rand(1, 10) . ".jpg";
            $user->verification_token = $verification_token;
            $user->save();

            session("veridication_code", $verification_code);

            // Mail::to($user->email)->send(new WelcomeEmail($user, $verification_code));
            Mail::to($user->email)->send(new ConfirmEmail($user, $verification_code));

            return redirect(route("verify", [$verification_token]))->with("success", "Account created successfully. Please login to continue");
        } catch (Exception $e) {
            dd($e->getMessage());
            return back()->with("error", $e->getMessage());
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = User::where("email", $request->email)->first();

        if ($user) {
            if (password_verify($request->password, $user->password)) {
                Auth::login($user);
                return redirect(route("user"));
            } else {
                return back()->with("error", "Invalid login credentials");
            }
        } else {
            return back()->with("error", "Invalid login credentials");
        }
    }
}
