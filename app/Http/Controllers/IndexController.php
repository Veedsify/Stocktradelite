<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        auth()->login(User::find(1)->first());
        return view("index");
    }
}
