<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailReceipts extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $orderProducts;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $orderProducts)
    {
        $this->order = $order;
        $this->orderProducts = $orderProducts;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ceramo Stone Group')
            ->view('emails.receipts.mail', [
                'order' => $this->order,
                'orderProducts' => $this->orderProducts
            ]);
    }
}
