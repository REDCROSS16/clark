<?php

namespace App\Patterns\Structural\Decorator;

class EmailNotifier extends BasicNotifier
{
    public function notify(string $message): string
    {
        return 'Email' . parent::notify($message);
    }
}