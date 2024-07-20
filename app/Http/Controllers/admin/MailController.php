<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\CustomEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function mail()
    {
        return view('admin.mail');
    }

    public function sendmail(Request $request)
    {

        try {
            $request->validate([
                'to' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = [
                'to' => $request->to,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::mailer("custom_mailer")->to(trim($request->to))->send(new CustomEmail($data));
            return redirect()->route("mail")->with("success", "Email sent successfully");
        } catch (\Exception $e) {
            Log::error("Error sending email: " . $e->getMessage());
            return redirect()->route("mail")->with("error", "Error sending email");
        }
    }
}
