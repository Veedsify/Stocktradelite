<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    public function btc(){
        return view('admin.btc');
    }
    public function eth(){
        return view('admin.btc');
    }
}
