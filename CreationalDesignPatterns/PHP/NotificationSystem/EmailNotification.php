<?php

namespace NotificationSystem;

class EmailNotification implements NotificationInterface
{

    public function send($message)
    {
        // TODO: Implement send() method.
        return "Email sent: " . $message;
    }
}