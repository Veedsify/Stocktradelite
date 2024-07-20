<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    //


    public function privacy(){
        return view('admin.privacy-policy'
    );
    }
     public function updatePolicyContent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',

        ]);


        $privacy_content = PrivacyPolicy::first();

        $privacy_content->title = $request->title;
        $privacy_content->content = $request->content;



        $privacy_content->save();

        return redirect()->back()->with('success', 'Privacy Content updated successfully');
    }
}
