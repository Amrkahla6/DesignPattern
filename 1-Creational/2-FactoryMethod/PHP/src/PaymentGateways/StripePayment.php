<?php
namespace Factory\Method\PaymentGateways;
class StripePayment implements PaymentGateway
{

    public function pay($amount)
    {
        // TODO: Implement pay() method.
        return "Paid $amount using Stripe";
    }
}