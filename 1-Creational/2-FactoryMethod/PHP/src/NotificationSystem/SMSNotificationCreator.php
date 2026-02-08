<?php
namespace Factory\Method\NotificationSystem;
class SMSNotificationCreator extends NotificationCreator
{

    public function createNotification(): Notification
    {
        // TODO: Implement createNotification() method.
        return new SMSNotification();
    }
}