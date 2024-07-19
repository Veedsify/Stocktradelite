<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Tier;
use App\Models\WalletAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepositController extends Controller
{
    //
    public function deposit()
    {
        $deposits = auth()->user()->deposits->sortByDesc('created_at');
        $wallet = WalletAddress::first();
        $tier = Tier::find(auth()->user()->tier);

        return view('user.deposit', [
            'deposits' => $deposits,
            'wallet' => $wallet,
            'tier' => $tier,
        ]);
    }

    public function depositBtcUpgrade(Request $request, $upgrade)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('payment_proof')) {
            $image = $request->file('payment_proof');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/deposits'), $imageName);
        }

        $deposit = new Deposit();
        $deposit->user_id = auth()->id();
        $deposit->amount = $request->amount;
        $deposit->payment_method = 'BTC';
        $deposit->status = 'pending';
        $deposit->is_upgrade = $upgrade === 'upgrade' ? 1 : 0;
        $deposit->payment_id = Str::random(10);
        $deposit->payment_proof = 'assets/images/deposits/' . $imageName ?? '';

        $deposit->transaction_ref = Str::random(36);
        $deposit->save();

        return redirect()->back()->with('success', 'Your deposit of ' . $request->amount . ' BTC has been received successfully, and is pending confirmation');
    }

    public function depositEthUpgrade(Request $request, $upgrade)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('payment_proof')) {
            $image = $request->file('payment_proof');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/images/deposits'), $imageName);
        }

        $deposit = new Deposit();
        $deposit->user_id = auth()->id();
        $deposit->amount = $request->amount;
        $deposit->payment_method = 'ETH';
        $deposit->status = 'pending';
        $deposit->is_upgrade = $upgrade === 'upgrade' ? 1 : 0;
        $deposit->payment_id = Str::random(10);
        $deposit->payment_proof = 'assets/images/deposits/' . $imageName ?? '';
        $deposit->transaction_ref = Str::random(36);
        $deposit->save();

        return redirect()->back()->with('success', 'Your deposit of ' . $request->amount . ' ETH has been received successfully, and is pending confirmation');
    }
}
