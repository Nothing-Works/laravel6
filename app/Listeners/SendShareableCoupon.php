<?php

namespace App\Listeners;

use App\Events\ProductPurchased;

class SendShareableCoupon
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(ProductPurchased $event)
    {
        var_dump('send shareable coupon');
    }
}
