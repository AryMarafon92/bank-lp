<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $event_type;
    public $name;
    public $email;
    public $place;
    public $city;
    public $state;
    public $phone;
    public $date;
    public $hour;
     
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event_type,$name,$email,$place,$city,$state,$phone,$date,$hour)
    {
        // $this->event_type = $event_type;
        // $this->name = $name;
        // $this->email = $email;
        // $this->place = $place;
        // $this->city = $city;
        // $this->state = $state;
        // $this->phone = $phone;
        // $this->date = $date;
        // $this->hour = $hour;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')->subject('Você recebeu um novo contato pelo site('.$this->name.')');
    }
}
