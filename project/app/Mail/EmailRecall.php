<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailRecall extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Kamaz')
            ->view('emails.recall', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email
            ]);
    }
}
