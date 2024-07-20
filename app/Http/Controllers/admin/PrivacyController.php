<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    //

    public function privacy()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('admin.privacy-policy'
    ,[
            'privacyPolicy' => $privacyPolicy,
        ]);
    }
    public function updatePolicyContent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $privacy_content = PrivacyPolicy::first();

        if (!$privacy_content) {
            $privacy_content = new PrivacyPolicy();
        }

        $privacy_content->title = $request->title;
        $privacy_content->content = $request->content;
        $privacy_content->save();

        return redirect()->back()->with('success', 'Privacy Content updated successfully');
    }
}
