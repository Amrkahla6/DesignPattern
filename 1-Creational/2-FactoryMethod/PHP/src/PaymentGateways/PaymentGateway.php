<?php
namespace Factory\Method\PaymentGateways;
interface PaymentGateway
{
    public function pay($amount);
}