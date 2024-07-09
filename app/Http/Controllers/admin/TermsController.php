<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    //
    public function termsCondition(){
       Return view('admin.terms-condition');
    }
}
