<?php

namespace App\Http\Controllers\admin;

use App\Models\Terms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    //
    public function termsCondition(){
        $termsCondition = Terms::first();
       Return view('admin.terms-condition',[
        'termsCondition' => $termsCondition,
       ]);
    }

    public function updateTermsCondition(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $Terms_content = Terms::first();

        if (!$Terms_content) {
            $Terms_content = new Terms();
        }

        $Terms_content->title = $request->title;
        $Terms_content->content = $request->content;
        $Terms_content->save();

        return redirect()->back()->with('success', 'Terms Content updated successfully');
    }
}
