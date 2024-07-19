<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    //
    public function deposit()
    {
        $deposits = auth()->user()->deposits->sortByDesc('created_at');
        return view('user.deposit', [
            'deposits' => $deposits,
        ]);
    }
}
