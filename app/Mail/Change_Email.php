<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Change_Email extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op1_emailregister; 
    public $op1_newemailregister;
    public $op1_photonewdocument; 
    public $op1_selfie; 
    public $op1_texto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op1_newemailregister, $op1_emailregister, $op1_photonewdocument, $op1_selfie, $op1_texto)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op1_emailregister = $op1_emailregister;
        $this->op1_newemailregister = $op1_newemailregister;
        $this->op1_photonewdocument = $op1_photonewdocument; 
        $this->op1_selfie = $op1_selfie; 
        $this->op1_texto = $op1_texto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Change_Email')->subject('Change Email for: '.$this->name.' '.$this->subname.'');
    }
}