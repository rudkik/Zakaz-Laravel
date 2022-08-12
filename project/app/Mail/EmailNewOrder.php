<?php

namespace App\Mail;

;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNewOrder extends Mailable
{
    use Queueable, SerializesModels;

    private  $request;
    private  $order;

    public function __construct(Request $request,  $order)
    {
        $this->request = $request;
        $this->order = $order;
    }

    public function build(): EmailNewOrder
    {
        return $this->subject('Ceramo Stone Group')
            ->view('emails.order', [
                'data' => $this->request,
                'order' => $this->order,
            ]);
    }
}
