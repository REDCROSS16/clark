<?php

namespace App\Patterns\Structural\Decorator;

class SimpleNotification implements NotifierInterface
{
    public function notify(string $message): string
    {
        return "[$message]";
    }
}