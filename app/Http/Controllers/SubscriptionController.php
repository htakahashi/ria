<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Cashier;
use Auth;
use Input;
use Stripe\Stripe;

class SubscriptionController extends Controller
{
    use Billable;
    public function create()
    {
        $user = Auth::user();
        if (Auth::check() && !$user->subscribed('yearly')){
            Stripe::setApiKey('sk_test_kHTC5ElAuB4ZwvYyEcka9Dpc');
            $stripeToken = Input::get('stripeToken');
            $user->newSubscription('yearly', 'yearly')->create($stripeToken);
            $user->is_admin=true;
            $user->save();
            return redirect('/');
        }
    }
}
