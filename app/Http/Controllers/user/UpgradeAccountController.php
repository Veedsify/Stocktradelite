<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Tier;
use App\Models\WalletAddress;

class UpgradeAccountController extends Controller
{
    //
    public function upgradeAccount()
    {
        $tiers = Tier::all();
        $wallets = WalletAddress::first();
        return view('user.upgrade-account', [
            'tiers' => $tiers,
            'wallet' => $wallets
        ]);
    }

    public function upgradeAccountDeposit($id)
    {
        $wallets = WalletAddress::first();
        $tier = Tier::find($id);

        return view('user.upgrade', [
            'tier' => $tier,
            'wallet' => $wallets,
        ]);
    }
}
