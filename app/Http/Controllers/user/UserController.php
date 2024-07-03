<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user()
    {
        return view('user.user');
    }
    public function deposit()
    {
        return view('user.deposit');
    }
}
