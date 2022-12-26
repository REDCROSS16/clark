<?php

namespace App\Patterns\Structural\Decorator;

class BasicNotifier implements NotifierInterface
{
    public function __construct(readonly protected NotifierInterface $notifier)
    {
    }

    public function notify(string $message): string
    {
        return $this->notifier->notify($message);
    }
}