<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    //
    public function notification()
    {
        $mynotifications = auth()->user()->notifications->sortByDesc('created_at');

        foreach ($mynotifications as $notification) {
            $notification->is_read = 1;
            $notification->save();
        }

        return view('user.notification', [
            'mynotifications' => $mynotifications,
        ]);
    }
    public function notificationAdmin()
    {
        $mynotifications = auth()->user()->notifications->sortByDesc('created_at');
        return view('admin.notification', [
            'mynotifications' => $mynotifications,
        ]);
    }
}
