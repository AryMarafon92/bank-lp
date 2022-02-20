<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Enable_2FA extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op4_photo; 
    public $op4_texto; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op4_photo, $op4_texto)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op4_photo = $op4_photo;
        $this->op4_texto = $op4_texto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Enable_2FA')->subject('Enable 2FA for: '.$this->name.' '.$this->subname.'');
    }
}
