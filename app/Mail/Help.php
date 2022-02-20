<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Help extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $burden;
    
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $burden,)
    {
        // $this->full_name = $full_name;
        $this->name = $name; 
        $this->email = $email; 
        $this->burden = $burden; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.WelcomeNewsletter')->subject('Mandamos um recadinho para seu E-mail ;)');
    }
}
