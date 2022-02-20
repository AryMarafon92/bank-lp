<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Problems_Plataform extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op7_emailregister; 
    public $op7_photo; 
    public $op7_texto; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op7_emailregister, $op7_photo, $op7_texto )
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op7_emailregister = $op7_emailregister;
        $this->op7_photo = $op7_photo;
        $this->op7_texto = $op7_texto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Problems_Plataform')->subject('Problems when accessing the platform for: '.$this->name.' '.$this->subname.'');
    }
}
