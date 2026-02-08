<?php
namespace Factory\Method\NotificationSystem;
interface Notification
{
    public function send($message);
}