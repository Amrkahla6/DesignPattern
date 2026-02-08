<?php

namespace PaymentSystem;

class StripePayment implements PaymentInterface
{

    public function pay($amount)
    {
        // TODO: Implement pay() method.
        return "Paid {$amount} using Stripe";
    }
}