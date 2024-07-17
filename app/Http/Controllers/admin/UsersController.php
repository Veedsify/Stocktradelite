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
}
