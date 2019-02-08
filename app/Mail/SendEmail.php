<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $sub;
    public $mes;
    public $firstName;
    public $lastName;
    public $phone;
    public $address;
    public $reason;
    
    public function __construct($subject, $message, $firstName, $lastName, $phone, $address, $reason)
    {
        $this->sub = $subject;
        $this->mes = $message;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
        $this->reason = $reason;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject = $this->sub;
        $e_message = $this->mes;
        $firstName = $this->firstName;
        $lastName = $this->lastName;
        $phone = $this->phone;
        $address = $this->address;
        $reason = $this->reason;
        
        // return $this->view('pages.sendemail')->subject($e_subject)->with(['message'=>$e_message, 'firstName'=>$firstName, 'lastName'=>$lastName, 'phone'=>$phone, 'address'=>$address, '$reason'=>$reason]);
        // return $this->view('pages.sendemail', compact("e_message"))->subject($e_subject);

        return $this->view('pages.sendemail')->subject($e_subject)->with(['e_message'=>$e_message, 'firstName'=>$firstName, 'lastName'=>$lastName, 'phone'=>$phone, 'address'=>$address, '$reason'=>$reason]);;
    }
}
