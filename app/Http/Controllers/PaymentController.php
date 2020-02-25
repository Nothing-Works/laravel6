<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        //notification:
        // one user
        // request()->user()->notify(new PaymentReceived(900));
        // a collection of users
        // Notification::send(request()->user(), new PaymentReceived());

        ProductPurchased::dispatch('toy');
    }
}
