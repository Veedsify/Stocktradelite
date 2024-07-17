<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Withdrawal;

class WithdrawalController extends Controller
{
    public function withdrawal()
    {
        $withdrawals = Withdrawal::where('user_id', auth()->id())->orderBY('id', 'desc')->get();
        return view('user.withdrawal', [
            'withdrawals' => $withdrawals,
        ]);
    }
}
