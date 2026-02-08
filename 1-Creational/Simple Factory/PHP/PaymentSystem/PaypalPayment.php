<?php

namespace PaymentSystem;

class PaypalPayment implements PaymentInterface
{

    public function pay($amount)
    {
        // TODO: Implement pay() method.
        return "Paid {$amount} using Paypal";
    }
}