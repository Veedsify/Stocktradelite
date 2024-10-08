<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getInTouch()
    {
        return view('contact');
    }
    public function submitContactForm(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();

            $adminEmail = env('MAIL_ADMIN_EMAIL');

            Mail::to($adminEmail)->send(new ContactEmail($contact));

            return redirect()->back()->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            Log::error("Error sending email: " . $e->getMessage());
            return redirect()->back()->with("error", "Error sending email");
        }
    }
}
