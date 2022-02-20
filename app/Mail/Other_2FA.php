<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Other_2FA extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op6_photo; 
    public $op6_texto; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject,$op6_photo, $op6_texto )
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op6_photo = $op6_photo;
        $this->op6_texto = $op6_texto;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Other_2FA')->subject('Other problems with 2FA for: '.$this->name.' '.$this->subname.'');
    }
}
