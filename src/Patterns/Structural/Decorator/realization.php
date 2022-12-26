<?php

namespace App\Patterns\Structural\Decorator;

require_once '../../../../vendor/autoload.php';

function getNotification(string $text, NotifierInterface $decorator) {
    echo 'Messages from: ';
    echo $decorator->notify($text) .PHP_EOL;
}

$textNotification = new SimpleNotification();

$basicNotifier = new BasicNotifier($textNotification);
$emailNotifier = new EmailNotifier($textNotification);
$telegramNotifier = new TelegramNotifier($textNotification);
$smsNotifier = new SmsNotifier($textNotification);


getNotification('hello TG', $telegramNotifier);
getNotification('sended Email from ematil notifier', $emailNotifier);
getNotification('SMS', $smsNotifier);
