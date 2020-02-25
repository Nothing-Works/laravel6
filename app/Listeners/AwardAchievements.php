<?php

namespace App\Listeners;

use App\Events\ProductPurchased;

class AwardAchievements
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
        var_dump('check for new achievements');
    }
}
