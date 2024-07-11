<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KycController extends Controller
{
    //
    public function kyc(){
        return view('user.kyc');
    }
}
