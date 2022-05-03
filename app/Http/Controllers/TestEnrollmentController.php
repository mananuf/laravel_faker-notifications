<?php

namespace App\Http\Controllers;

use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class TestEnrollmentController extends Controller
{
    //
    public function sendTestNotification(){
        $user = User::first();

        $enrollmentData = [
            'body' => 'You received a new test notification',
            'enrollmentText' => 'You are now allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'Enrollment is valid for 14 days',
        ];

        $user->notify(new TestEnrollment($enrollmentData));
        // Notification::send($user, new TestEnrollment($enrollmentData));

        // $user = App\User::find(1);
 
        $user->unreadNotifications()->update(['read_at' => now()]);
    }
}
