<?php
namespace Factory\Method\NotificationSystem;
abstract class NotificationCreator
{
    abstract public function createNotification(): Notification;

    public function sendNotification($message)
    {
        $notification = $this->createNotification();
        return $notification->send($message);
    }
}