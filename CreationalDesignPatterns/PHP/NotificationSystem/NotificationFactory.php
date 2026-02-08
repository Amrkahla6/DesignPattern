<?php

namespace NotificationSystem;

class NotificationFactory
{
    public static function make($type){
        if ($type == 'email') return new EmailNotification();
        if ($type == 'sms') return new SMSNotification();
        if ($type == 'push') return new PushNotification();

        throw new Exception("Invalid notification type");
    }
}