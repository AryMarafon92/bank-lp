<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Deposit extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subname;
    public $email;
    public $phone;
    public $subject;
    public $op9_hash; 
    public $op9_date;
    public $op9_quant;
    public $op9_texto; 
    public $op9_coin; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subname, $email, $phone, $subject, $op9_date, $op9_hash, $op9_coin, $op9_quant, $op9_texto)
    {
        $this->name = $name;
        $this->subname = $subname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->op9_hash = $op9_hash;
        $this->op9_date = $op9_date;
        $this->op9_quant = $op9_quant;
        $this->op9_texto = $op9_texto;
        $this->op9_coin = $op9_coin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Deposit')->subject('Deposit for: '.$this->name.' '.$this->subname.'');
    }
}
