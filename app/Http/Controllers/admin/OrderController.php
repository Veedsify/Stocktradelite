<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function updateOrder(Request $request, $id, $tier)
    {
        $request->validate([
            'deposit_status' => 'required',
        ]);

        $order = Deposit::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Deposit not found');
        }

        if ($request->deposit_status == 'approved') {
            $order->status = 'approved';
            $order->user->balance += $order->amount;

            if ($tier === 'upgrade') {
                $order->user->tier = $order->tier_id;
            }

            // send mail to user
            $order->save();
            $order->user->save();

            return redirect()->back()->with('success', 'Deposit Approved');

        } elseif ($request->deposit_status == 'declined') {
            $order->status = 'rejected';
            // send mail to user
            $order->save();
            return redirect()->back()->with('success', 'Deposit Declined');
        }

        return redirect()->back()->with('error', 'Invalid deposit status');
    }

}
