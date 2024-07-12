<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    //
    public function changePassword()
    {
        return view('user.change-password');
    }

    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::find(auth()->user()->id);

        if (password_verify($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }

        $user->password = password_hash($request->password, PASSWORD_DEFAULT);

        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully');
    }
}
