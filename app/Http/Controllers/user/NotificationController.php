<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function notification(){
        return view('user.notification');
    }
    public function notificationAdmin(){
        return view('admin.notification');
    }
}
