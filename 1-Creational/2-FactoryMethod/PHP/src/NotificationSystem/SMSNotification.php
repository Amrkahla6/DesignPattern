<?php
namespace Factory\Method\NotificationSystem;
class SMSNotification implements Notification
{

    public function send($message)
    {
        // TODO: Implement send() method.
        return "Sending SMS: $message";
    }
}