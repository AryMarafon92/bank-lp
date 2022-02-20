<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OtherSubject extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $name;
     public $subname;
     public $email;
     public $phone;
     public $subject;
     public $photo;
     public $text_of_the_user;

    public function __construct($name, $subname, $email, $phone, $subject, $photo, $text_of_the_user)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->photo = $photo;
        $this->text_of_the_user = $text_of_the_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.otherSubject')->subject('Other assunt for: '.$this->name.' '.$this->subname.'');;
    }
}
