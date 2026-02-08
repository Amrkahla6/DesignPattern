<?php
namespace Factory\Method\PaymentGateways;
class MyFatoorahCreator extends PaymentCreator
{

    public function createPayment(): PaymentGateway
    {
        // TODO: Implement createPayment() method.
        return new MyFatoorahPayment();
    }
}