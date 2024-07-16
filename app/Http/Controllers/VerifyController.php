<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    //
    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();
        if (!$user) {
            return redirect(route('login'))->with('error', 'Invalid verification token');
        }
        return view('verify', [
            'user' => $user,
        ]);
    }

    public function verifyAccount(Request $request)
    {
        $code = $request->code;
        //convert array to string
        $code = implode("", $code);

        if (!$code || strlen($code) != 6) {
            return back()->with('error', 'Verification code is required');
        }

        $user = User::where('verification_code', $code)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid verification token');
        }

        $user->update([
            'email_verified_at' => now(),
            'verification_token' => null,
        ]);

        return redirect(route('user'))->with('success', 'Account verified successfully');
    }
}
