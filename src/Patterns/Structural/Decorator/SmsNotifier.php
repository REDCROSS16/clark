<?php

namespace App\Patterns\Structural\Decorator;

class SmsNotifier extends BasicNotifier
{
    public function notify(string $message): string
    {
        return 'SMS' . parent::notify($message);
    }
}