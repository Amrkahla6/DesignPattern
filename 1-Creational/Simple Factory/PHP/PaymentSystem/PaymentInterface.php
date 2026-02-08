<?php

namespace PaymentSystem;

interface PaymentInterface
{
    public function pay($amount);
}