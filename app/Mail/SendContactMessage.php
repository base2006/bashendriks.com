<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $contact_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $contact_message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->contact_message = $contact_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM'), env('MAIL_FROM_NAME'))
            ->subject('Contactformulier bashendriks.com')
            ->view('emails.contactform');
    }
}
