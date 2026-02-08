<?php


use Factory\Method\LoggerSystem\DatabaseLoggerCreator;
use Factory\Method\NotificationSystem\EmailNotificationCreator;
use Factory\Method\PaymentGateways\MyFatoorahCreator;
use Factory\Method\StorageDrivers\S3StorageCreator;

require_once __DIR__ . '/../vendor/autoload.php';


$creator = new EmailNotificationCreator();
echo $creator->sendNotification("Hello User") . "\n";

$payment = new MyFatoorahCreator();
echo $payment->processPayment(1000) . "\n";

$logger = new DatabaseLoggerCreator();
echo $logger->writeLog("Test log")  . "\n";

$storage = new S3StorageCreator();
echo $storage->store("amr.pdf");

