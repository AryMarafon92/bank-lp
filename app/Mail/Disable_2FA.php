<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Disable_2FA extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op5_emailregister; 
    public $op5_photonewdocument; 
    public $op5_selfie; 
    public $op5_texto; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op5_emailregister, $op5_photonewdocument, $op5_selfie, $op5_texto)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op5_emailregister = $op5_emailregister;
        $this->op5_photonewdocument = $op5_photonewdocument;
        $this->op5_selfie = $op5_selfie; 
        $this->op5_texto = $op5_texto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Disable_2FA')->subject('Disable 2fa for: '.$this->name.' '.$this->subname.'');
    }
}
