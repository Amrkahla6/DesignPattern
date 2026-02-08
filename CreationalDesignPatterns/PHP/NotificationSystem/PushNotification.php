<?php

namespace NotificationSystem;

class PushNotification implements NotificationInterface
{

    public function send($message)
    {
        // TODO: Implement send() method.
        return "Push sent: " . $message;
    }
}