<?php
namespace Factory\Method\PaymentGateways;
class StripeCreator extends PaymentCreator
{

    public function createPayment(): PaymentGateway
    {
        // TODO: Implement createPayment() method.
        return new StripePayment();
    }
}