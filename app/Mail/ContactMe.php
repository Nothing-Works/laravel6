<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable;
    use SerializesModels;

    public string $topic;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $topic)
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
        //use view to do email
        // return $this->view('emails.contact-me')->subject('More information about '.$this->topic);
        //use markdown to do email
        return $this->markdown('emails.contact-meMD')->subject('More information about '.$this->topic);
    }
}
