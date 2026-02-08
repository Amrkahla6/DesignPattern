<?php

namespace PaymentSystem;

class CashPayment implements PaymentInterface
{

    public function pay($amount)
    {
        // TODO: Implement pay() method.
        return "Paid {$amount} using Cash";
    }
}