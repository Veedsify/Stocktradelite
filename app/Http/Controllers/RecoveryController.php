<?php

namespace App\Http\Controllers;

use App\Mail\CustomEmail;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RecoveryController extends Controller
{
    //
    public function recovery()
    {
        return view("recovery-account");
    }

    public function recoverAccount(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'No account found with that email');
        }

        $token = Str::random(60);

        $user->update([
            'recovery_token' => $token,
        ]);

        $data = [
            'subject' => 'Password Reset Request',
            'message' => '
                <p>Hi ' . $user->name . ',</p>
                <p>We received a request to reset your password. Click the link below to reset your password.</p>
                <a
                    style="background-color: salmon; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;"
                 href="' . route('reset.password', $token) . '">Reset Password</a>
                <p>If you did not request a password reset, please ignore this email.</p>
            ',
        ];

        Mail::to($user->email)->send(new CustomEmail($data));
        Notification::create([
            "user_id" => $user->id,
            "title" => "Password Reset Request",
            "content" => "We have sent you an email with instructions to reset your password",
            "is_read" => false,
        ]);

        return back()->with('success', 'We have sent you an email with instructions to reset your password');
    }

    public function resetPassword($token)
    {
        $user = User::where('recovery_token', $token)->first();

        if (!$user) {
            return redirect()->route('recovery')->with('error', 'Invalid token');
        }

        return view('reset', [
            'token' => $token,
        ]);
    }

    public function updatePassword(Request $request, $token)
    {
        $request->validate([
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::where('recovery_token', $token)->first();

        if (!$user) {
            return redirect()->route('recovery')->with('error', 'Invalid password reset token');
        }

        $user->update([
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'recovery_token' => null,
        ]);

        return redirect()->route('login')->with('success', 'Password updated successfully, you can now login');
    }
}
