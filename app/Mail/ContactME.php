<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactME extends Mailable
{
    use Queueable, SerializesModels;
    public $topic;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($topic)
    {
        $this->topic = $topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // use with mailable class
        // return $this->view('emails.contact-me')
        //     ->subject('More Information about ' . $this->topic);

        return $this->markdown('emails.contact-me')
            ->subject('More Information about ' . $this->topic);
    }
}
