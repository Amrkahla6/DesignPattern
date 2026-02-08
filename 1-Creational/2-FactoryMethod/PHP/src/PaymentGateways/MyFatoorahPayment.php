<?php
namespace Factory\Method\PaymentGateways;
class MyFatoorahPayment implements PaymentGateway
{

    public function pay($amount)
    {
        // TODO: Implement pay() method.
        return "Paid $amount using MyFatoorah";
    }
}