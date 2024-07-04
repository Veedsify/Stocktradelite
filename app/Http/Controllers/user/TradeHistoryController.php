<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeHistoryController extends Controller
{
    //{
    public function tradeHistory(){
        return view('user.trade-history');
    }
}
