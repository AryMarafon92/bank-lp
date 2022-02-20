<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Change_Password extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op3_emailregister;
    public $op3_photonewdocument; 
    public $op3_selfie;
    public $op3_texto; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op3_emailregister, $op3_photonewdocument, $op3_selfie, $op3_texto)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op3_emailregister = $op3_emailregister;
        $this->op3_photonewdocument = $op3_photonewdocument; 
        $this->op3_selfie = $op3_selfie; 
        $this->op3_texto = $op3_texto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Change_Password')->subject('Change Password for: '.$this->name.' '.$this->subname.'');

    }
}
