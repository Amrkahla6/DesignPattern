<?php
namespace Factory\Method\NotificationSystem;
class EmailNotificationCreator extends NotificationCreator
{

    public function createNotification(): Notification
    {
        // TODO: Implement createNotification() method.
        return new EmailNotification();
    }
}