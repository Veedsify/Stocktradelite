<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoveryController extends Controller
{
    //
    public function recovery()
    {
        return view("recovery-account");
    }
}

