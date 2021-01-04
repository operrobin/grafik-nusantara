<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailArsip extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $attach;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [], $attachments = [])
    {
        $this->data = $data;
        $this->attach = $attachments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $email = $this
            ->with($this->data)
            ->subject('Arsip Grafis Nusantara')
            ->view('emails.arsip');

        $attach = $this->attach;

        foreach($attach as $path) {
            $email->attach($path);
        }

        return $email;
    }
}
