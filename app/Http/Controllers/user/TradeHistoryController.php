<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Profit;
use App\Models\Trade;

class TradeHistoryController extends Controller
{
    //{
    public function tradeHistory()
    {
        $trades = Profit::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
        return view('user.trade-history', [
            'trades' => $trades,
        ]);

    }
}
