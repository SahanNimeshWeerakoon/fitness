<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public function sendemail(Request $request) {
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $phone = $request->phone;
        $message = '';
        $address = '';
        $reason = '';
        if($request->message) {
            $message = $request->message;
            $subject = 'Contact Email';
        }
        if($request->reason) {
            $subject = 'Client Joining';
            $address = $request->address;
            $reason = $request->reason;
        }

        Mail::to('hsahanweerakoon@gmail.com')->send( new SendEmail($subject, $message, $firstName, $lastName, $phone, $address, $reason) );
        Session::flash("success");
        return back();
    }
}
