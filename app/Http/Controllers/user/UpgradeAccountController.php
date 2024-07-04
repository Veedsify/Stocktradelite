<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpgradeAccountController extends Controller
{
    //
    public function upgradeAccount(){
        return view('user.upgrade-account');
    }
}
