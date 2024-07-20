<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Notification;

class NotificationController extends Controller
{
    //
    public function notification()
    {
        $mynotifications = auth()->user()->notifications->sortByDesc('created_at');
        Notification::where('user_id', auth()->user()->id)->update(['is_read' => true]);

        return view('user.notification', [
            'mynotifications' => $mynotifications,
        ]);
    }
    public function notificationAdmin()
    {
        $mynotifications = auth()->user()->notifications->sortByDesc('created_at');
        Notification::where('user_id', auth()->user()->id)->update(['is_read' => true]);
        return view('admin.notification', [
            'mynotifications' => $mynotifications,
        ]);
    }
}
