<?php

namespace App\Listeners;

use App\Events\ProductPurchase;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShareableCoupon
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductPurchase  $event
     * @return void
     */
    public function handle(ProductPurchase $event)
    {
        var_dump('send shareable coupon');
    }
}
