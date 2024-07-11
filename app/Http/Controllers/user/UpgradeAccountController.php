<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Tier;

class UpgradeAccountController extends Controller
{
    //
    public function upgradeAccount()
    {
        $tiers = Tier::all();
        return view('user.upgrade-account', [
            'tiers' => $tiers,
        ]);
    }
}
