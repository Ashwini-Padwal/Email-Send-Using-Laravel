<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    function sendMail(Request $request){
        $to=$request->email;
        $msg=$request->msg;
        $subject=$request->sub;
        Mail::to($to)->send(new WelcomeEmail($msg,$subject));
        echo "Email Sent Successfully.";
    }
}
