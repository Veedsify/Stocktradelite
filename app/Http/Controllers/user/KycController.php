<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class KycController extends Controller
{
    //
    public function kyc()
    {
        $verification = Kyc::where('user_id', auth()->user()->id)->first();
        return view('user.kyc', [
            'verification' => $verification,
        ]);
    }

    public function kycSubmit(Request $request)
    {
        $request->validate([
            'id_type' => 'required',
            'front_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:4190',
            'back_id' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:4190',
        ]);

        try {

            $front = Str::random(5) . '-' . time() . auth()->user()->userid . '.' . $request->front_id->extension();
            $request->front_id->move(public_path('assets/images/kyc'), $front);
            $frontPath = 'assets/images/kyc/' . $front;

            $back = Str::random(5) . '-' . time() . auth()->user()->userid . '.' . $request->back_id->extension();
            $request->back_id->move(public_path('assets/images/kyc'), $back);
            $backPath = 'assets/images/kyc/' . $back;

            Kyc::create([
                'user_id' => auth()->user()->id,
                'first_name' => explode(' ', auth()->user()->name)[0] ?? auth()->user()->name,
                'last_name' => explode(' ', auth()->user()->name)[1] ?? auth()->user()->name,
                'verification_id' => auth()->user()->userid,
                'verification_type' => $request->id_type,
                'status' => 'pending',
                'file_path' => $frontPath,
                'file_path2' => $backPath,
            ]);

            return redirect()->back()->with('success', 'KYC Submitted Successfully');

        } catch (\Exception $e) {
            Log::error($e->getMessage(), ['file' => $e->getFile(), 'line' => $e->getLine()]);
            return redirect()->back()->with('error', 'An error occurred while submitting KYC');
        }
    }
    public function kycCenter()
    {
        $verifications = Kyc::where('status', 'pending')->orderBy('created_at', 'desc')->get();
        return view('admin.kyc-center', [
            'verifications' => $verifications,
        ]);
    }

    public function kycUpdates(Request $request, $id)
    {
        $request->validate([
            'verification_status' => 'required',
        ]);

        try {
            $verification = Kyc::find($id);
            $verification->status = $request->verification_status;
            $verification->save();

            $verification->user->verified = $request->verification_status == 'approved' ? 1 : 0;
            $verification->user->save();

            if ($request->verification_status == 'approved') {
                // Send Email
                // $verification->user->notify(new KycApproved($verification->user));
                return redirect()->back()->with('success', 'KYC Updated Successfully for User: ' . $verification->user->name);
            } else if ($request->verification_status == 'rejected') {
                // Send Email
                // $verification->user->notify(new KycRejected($verification->user));
                Log::info($request->rejection_reason);
                $path1 = public_path($verification->file_path);
                $path2 = public_path($verification->file_path2);
                if ($path1 && $path2) {
                    unlink($path1);
                    unlink($path2);
                }
                return redirect()->back()->with('success', 'KYC Rejected Successfully for User: ' . $verification->user->name);
            }

        } catch (\Exception $e) {
            Log::error($e->getMessage(), ['file' => $e->getFile(), 'line' => $e->getLine()]);
            return redirect()->back()->with('error', 'An error occurred while updating KYC');
        }
    }

}
