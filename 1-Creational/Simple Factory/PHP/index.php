<?php

use DoorExample\DoorFactory;
use FileStorageSystem\StorageFactory;
use NotificationSystem\NotificationFactory;
use PaymentSystem\PaymentFactory;

require_once __DIR__ . '/vendor/autoload.php';

$door = DoorFactory::makeDoor(100,200);

echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

$door2 = DoorFactory::makeDoor(50, 100);
echo 'Width: ' . $door2->getWidth() . "\n";
echo 'Height: ' . $door2->getHeight() . "\n";


$driver = StorageFactory::make("local");
echo $driver->upload("image.png") . "\n";

$notification = NotificationFactory::make('sms');
echo $notification->send("Order Created") . "\n";

$payment = PaymentFactory::make("paypal");
echo $payment->pay(100) . "\n";
