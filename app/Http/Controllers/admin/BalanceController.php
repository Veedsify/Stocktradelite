<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    //
    public function editBalance($id){
        return view('admin.balance-edit');
    }
}
