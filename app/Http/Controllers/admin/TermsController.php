<?php

namespace App\Http\Controllers\admin;

use App\Models\Terms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    //
    public function termsCondition(){
       Return view('admin.terms-condition');
    }
    public function updateTermsCondition(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',

        ]);


        $privacy_content = Terms::first();

        $privacy_content->title = $request->title;
        $privacy_content->content = $request->content;



        $privacy_content->save();

        return redirect()->back()->with('success', 'Privacy Content updated successfully');
    }
}
