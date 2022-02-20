<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Change_Name extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op2_emailregister; 
    public $op2_newname;
    public $op2_photonewdocument; 
    public $op2_selfie; 
    public $op2_photo; 
    public $op2_texto; 
    public $op2_registername; 
    public $newname; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op2_newname, $op2_emailregister, $op2_photonewdocument, $op2_selfie, $op2_texto, $op2_photo, $op2_registername, $newname)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op2_emailregister = $op2_emailregister;
        $this->op2_newname = $op2_newname;
        $this->op2_photonewdocument = $op2_photonewdocument; 
        $this->op2_photo = $op2_photo;
        $this->op2_selfie = $op2_selfie; 
        $this->op2_texto = $op2_texto;
        $this->op2_registername = $op2_registername;
        $this->newname = $newname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Change_Name')->subject('Change Name for: '.$this->name.' '.$this->subname.'');
    }
}