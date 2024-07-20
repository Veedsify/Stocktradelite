<?php

namespace App\Http\Controllers;

use App\Models\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function terms()
    {
        $termsContent  = Terms::first();
        return view("terms",
        [
            "termsContent"=>$termsContent,
        ]);
    }
}
