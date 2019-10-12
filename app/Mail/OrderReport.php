<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderReport extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->checkout_name = $data['name'];
        $this->checkout_city = $data['city'];
        $this->checkout_address = $data['address'];
        $this->checkout_phone = $data['phone'];
        $this->checkout_email = $data['email'];
        $this->checkout_comment = $data['comment'];
        $this->checkout_delivery = $data['delivery'];
        $this->checkout_total = $data['total'];
        $this->checkout_products = $data['products'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      return $this->from(config('mail.from.address'))
          ->markdown('email.orderReport')
          ->subject('Новый заказ')
          ->with([
              'checkout_name' => $this->checkout_name,
              'checkout_city' => $this->checkout_city,
              'checkout_address' => $this->checkout_address,
              'checkout_phone' => $this->checkout_phone,
              'checkout_email' =>  $this->checkout_email,
              'checkout_comment' => $this->checkout_comment,
              'checkout_delivery' => $this->checkout_delivery,
              'checkout_total' => $this->checkout_total,
              'checkout_products' => $this->checkout_products,
          ]);
    }
}
