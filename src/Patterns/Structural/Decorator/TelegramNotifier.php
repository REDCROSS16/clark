<?php

namespace App\Patterns\Structural\Decorator;

class TelegramNotifier extends BasicNotifier
{
    public function notify(string $message): string
    {
        return 'Telegram' . parent::notify($message);
    }
}