<?php

namespace App\Http\Controllers;

class UserNotificationController extends Controller
{
    public function show()
    {
        $notifications = tap(auth()->user()->unreadNotifications)->markAsRead();

        return view('notifications.show', compact('notifications'));
    }
}
