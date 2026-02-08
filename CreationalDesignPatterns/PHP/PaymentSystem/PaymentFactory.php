<?php

namespace PaymentSystem;

class PaymentFactory
{
    public static function make($type)
    {
        switch ($type) {
            case 'paypal':
                return new PaypalPayment();

            case 'stripe':
                return new StripePayment();

            case 'cash':
                return new CashPayment();

            default:
                throw new Exception("Unsupported payment type");
        }
    }
}