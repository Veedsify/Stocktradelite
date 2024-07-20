<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function users()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.users', [
            'users' => $users,
        ]);
    }

    public function upgradeUser(Request $request, $userId)
    {

        $user = User::find($userId);
        // Update the user's role
        $user->role = $request->role;
        $user->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'User role updated successfully.');
    }

}
