<?php

namespace NotificationSystem;

class SMSNotification implements NotificationInterface
{

    public function send($message)
    {
        // TODO: Implement send() method.
        return "SMS sent: " . $message;
    }
}