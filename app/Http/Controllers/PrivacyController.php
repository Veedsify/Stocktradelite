<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyController extends Controller
{
    public function privacy()
    {
        $privacyContent  = PrivacyPolicy::first();
        return view("privacy",
        [
            "privacyContent"=>$privacyContent,
        ]
    );
    }
}
