<?php
namespace Factory\Method\PaymentGateways;
abstract class PaymentCreator
{
    abstract  public function createPayment() : PaymentGateway;

    public function processPayment($amount)
    {
        $payment = $this->createPayment();
        return $payment->pay($amount);
    }
}