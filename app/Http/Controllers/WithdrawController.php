<?php

namespace App\Http\Controllers;

use App\Mail\WithdrawalRequest;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class WithdrawController extends Controller
{

    public function processBitcoinWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'bitcoin_address' => 'required|string',
        ]);

        $user = auth()->user();

        if ($user->balance < $request->amount) {
            return redirect()->back()->with("error", "Insufficient funds to complete this transaction");
        }
        $trasaction_id = Str::random(10);

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = auth()->user()->id;
        $withdrawal->amount = $request->amount;
        $withdrawal->status = "pending";
        $withdrawal->bitcoin_address = $request->bitcoin_address;
        $withdrawal->method = 'bitcoin';
        $withdrawal->transaction_id = $trasaction_id;
        $withdrawal->save();

        Mail::to(auth()->user()->email)->send(new WithdrawalRequest($withdrawal));

        User::find(auth()->user()->id)->update([
            'balance' => $user->balance - $request->amount,
        ]);

        return redirect()->back()->with('success', 'Withdrawal request has been submitted successfully.');
    }

    public function processBankWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'bank_name' => 'required|string',
            'bank_account_name' => 'required|string',
            'bank_account_number' => 'required|string',
            'swift_code' => 'required|string',
        ]);

        $user = auth()->user();

        if ($user->balance < $request->amount) {
            return redirect()->back()->with("error", "Insufficient funds to complete this transaction");
        }
        $trasaction_id = Str::random(10);

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = auth()->user()->id;
        $withdrawal->amount = $request->amount;
        $withdrawal->status = "pending";
        $withdrawal->bank_name = $request->bank_name;
        $withdrawal->bank_account_name = $request->bank_account_name;
        $withdrawal->bank_account_number = $request->bank_account_number;
        $withdrawal->swift_code = $request->swift_code;
        $withdrawal->iban = $request->iban;
        $withdrawal->transaction_id = $trasaction_id;
        $withdrawal->method = 'bank';
        $withdrawal->save();

        Mail::to(auth()->user()->email)->send(new WithdrawalRequest($withdrawal));

        User::find(auth()->user()->id)->update([
            'balance' => $user->balance - $request->amount,
        ]);

        return redirect()->back()->with('success', 'Withdrawal request has been submitted successfully.');
    }

    public function processCardWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'card_number' => 'required|string',
            'card_name' => 'required|string',
            'card_year' => 'required|string',
            'card_month' => 'required|string',
            'card_cvc' => 'required|string',
        ]);

        $user = auth()->user();

        if ($user->balance < $request->amount) {
            return redirect()->back()->with("error", "Insufficient funds to complete this transaction");
        }
        $trasaction_id = Str::random(10);

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = auth()->user()->id;
        $withdrawal->amount = $request->amount;
        $withdrawal->status = "pending";
        $withdrawal->card_number = $request->card_number;
        $withdrawal->card_name = $request->card_name;
        $withdrawal->card_year = $request->card_year;
        $withdrawal->card_month = $request->card_month;
        $withdrawal->card_cvc = $request->card_cvc;
        $withdrawal->method = 'card';
        $withdrawal->transaction_id = $trasaction_id;

        $withdrawal->save();

        Mail::to(auth()->user()->email)->send(new WithdrawalRequest($withdrawal));

        User::find(auth()->user()->id)->update([
            'balance' => $user->balance - $request->amount,
        ]);

        return redirect()->back()->with('success', 'Withdrawal request has been submitted successfully.');
    }

    public function processEthereumWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'ethereum_address' => 'required|string',
        ]);

        $user = auth()->user();

        if ($user->balance < $request->amount) {
            return redirect()->back()->with("error", "Insufficient funds to complete this transaction");
        }
        $trasaction_id = Str::random(10);

        $withdrawal = new Withdrawal();
        $withdrawal->user_id = auth()->user()->id;
        $withdrawal->amount = $request->amount;
        $withdrawal->status = "pending";
        $withdrawal->ethereum_address = $request->ethereum_address;
        $withdrawal->method = 'ethereum';
        $withdrawal->transaction_id = $trasaction_id;
        $withdrawal->save();

        Mail::to(auth()->user()->email)->send(new WithdrawalRequest($withdrawal));

        User::find(auth()->user()->id)->update([
            'balance' => $user->balance - $request->amount,
        ]);

        return redirect()->back()->with('success', 'Withdrawal request has been submitted successfully.');
    }
}
