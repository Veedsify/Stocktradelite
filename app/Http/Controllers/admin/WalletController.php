<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WalletAddress;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    public function btc()
    {
        $wallets = WalletAddress::where('id', 1)->first();
        return view('admin.btc', [
            'wallets' => $wallets,
        ]);
    }
    public function eth()
    {
        $wallets = WalletAddress::where('id', 1)->first();
        return view('admin.eth', [
            'wallets' => $wallets,
        ]);
    }
    public function walletAddressBtc(Request $request)
    {
        $request->validate([
            'btc_address' => 'required',
        ]);

        $checkWallet = WalletAddress::first();
        if ($checkWallet) {
            $checkWallet->btc_address = $request->btc_address;
            $checkWallet->save();

            return redirect()->back()->with('success', 'Wallet Address Updated Successfully');
        } else {
            WalletAddress::create([
                'btc_address' => $request->btc_address,
            ]);

            return redirect()->back()->with('success', 'Wallet Address Updated Successfully');
        }
    }

    public function walletAddressEth(Request $request)
    {
        $request->validate([
            'eth_address' => 'required',
        ]);

        $checkWallet = WalletAddress::first();
        if ($checkWallet) {
            $checkWallet->eth_address = $request->eth_address;
            $checkWallet->save();

            return redirect()->back()->with('success', 'Wallet Address Updated Successfully');
        } else {
            WalletAddress::create([
                'eth_address' => $request->eth_address,
            ]);

            return redirect()->back()->with('success', 'Wallet Address Updated Successfully');
        }
    }
}
