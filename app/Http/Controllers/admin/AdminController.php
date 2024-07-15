<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Kyc;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function admin()
    {
        $usersCount = User::where('role', 'user')->count();
        $pendingKyc = Kyc::where('status', 'pending')->count();
        $contactCount = Contact::where('is_responded', false)->count();
        return view('admin.admin', [
            'usersCount' => $usersCount,
            'pendingKyc' => $pendingKyc,
            'contactCount' => $contactCount,
        ]);
    }
}
