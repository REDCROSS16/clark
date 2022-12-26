<?php

namespace App\Patterns\Structural\Decorator;

interface NotifierInterface
{
    public function notify(string $message): string;
}