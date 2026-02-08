<?php

namespace Factory\Method\NotificationSystem;

class EmailNotification implements Notification
{

    public function send($message)
    {
        // TODO: Implement send() method.
        return "Sending Email: $message";
    }
}