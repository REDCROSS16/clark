<?php
namespace App\Patterns\Structural\Decorator;


function getNotification(string $text, NotifierInterface $decorator) {
    echo 'MEssages' . PHP_EOL;
    echo $decorator->notify($text);
}

$textNotification = new SimpleNotification();

$basicNotifier = new BasicNotifier($textNotification);
$emailNotifier = new EmailNotifier($textNotification);
$telegramNotifier = new TelegramNotifier($textNotification);
$smsNotifier = new SmsNotifier($textNotification);


getNotification('hello TG', $telegramNotifier);
getNotification('sended Email from ematil notifier', $emailNotifier);
getNotification('SMS', $smsNotifier);
