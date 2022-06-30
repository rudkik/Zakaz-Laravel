<?php

namespace App\Mail;

use App\Models\ContentMailing;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNewsletters extends Mailable
{
    use Queueable, SerializesModels;

    private ContentMailing $emailNewsletter;
    private Subscriber $subscriber;

    public function __construct(ContentMailing $emailNewsletter, Subscriber $subscriber)
    {

        $this->emailNewsletter = $emailNewsletter;
        $this->subscriber = $subscriber;

    }

    public function build(): EmailNewsletters
    {
        return $this->subject('Ceramo Stone Group')
            ->view('emails.mail', [
                'data' => $this->emailNewsletter,
                'subscriber' => $this->subscriber,
            ]);
    }
}
