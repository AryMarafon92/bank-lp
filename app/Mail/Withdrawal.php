<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Withdrawal extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op8_coin; 
    public $op8_date;
    public $op8_quant;
    public $op8_texto; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op8_date, $op8_coin, $op8_quant, $op8_texto)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op8_coin = $op8_coin;
        $this->op8_date = $op8_date;
        $this->op8_quant = $op8_quant;
        $this->op8_texto = $op8_texto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Withdrawal')->subject('Withdrawal for: '.$this->name.' '.$this->subname.'');
    }
}
