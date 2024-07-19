<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class OrderController extends Controller
{
    //
    public function orders($id)
    {
        $user = User::find($id);
        $orders = $user->deposits->sortByDesc('created_at');
        return view('admin.orders', [
            'user' => $user,
            'orders' => $orders,
        ]);
    }
}
