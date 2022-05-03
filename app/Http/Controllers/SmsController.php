<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vonage\Laravel\Facades\Vonage;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    //
    public function send(){
        Nexmo::message->send([
            'to' => '2349023013445',
            'from' => '2347038555803',
            'text' => 'Pay your tax.'
        ]);
    }
}
