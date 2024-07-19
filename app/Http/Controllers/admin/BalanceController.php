<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profit;
use App\Models\Trade;
use App\Models\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    //
    public function editBalance($id)
    {
        $user = User::find($id);
        $profits = Profit::where('user_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.balance-edit', [
            'user' => $user,
            'profits' => $profits,
        ]);
    }

    public function editTrades(Request $request, $id)
    {
        $request->validate([
            'user_trades' => 'required',
        ]);

        $user = User::find($id);
        $profits = $user->trades;

        if ($profits->count() > 0) {
            $profit = $profits->first();
            $profit->total_count = $request->user_trades;
            $profit->save();
        } else {
            $profit = new Trade();
            $profit->user_id = $id;
            $profit->total_count = $request->user_trades;
            $profit->save();
        }

        return redirect()->back()->with('success', 'Trades Updated Successfully');
    }

    public function editProfits(Request $request, $id)
    {
        $request->validate([
            'total_changes_today' => 'required',
        ]);

        $user = User::find($id);

        $newProfitToday = new Profit();
        $newProfitToday->user_id = $id;
        if (strpos($request->total_changes_today, '-') !== false) {
            $newProfitToday->total_profit = $request->total_changes_today;
            $user->balance = $user->balance + $request->total_changes_today;
            $user->save();
        } else {
            $newProfitToday->total_profit = $request->total_changes_today;
            $user->balance = $user->balance + $request->total_changes_today;
            $user->save();
        }

        $newProfitToday->save();

        return redirect()->back()->with('success', 'Profits Updated Successfully');
    }

    public function updateBalance(Request $request, $id)
    {
        $request->validate([
            'total_balance' => 'required',
        ]);

        $user = User::find($id);
        $user->balance = $request->total_balance;
        $user->save();

        return redirect()->back()->with('success', 'Balance Updated Successfully');
    }
}
