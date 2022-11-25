<?php

namespace App\Patterns\Factory;

class User
{
    public function __construct(
        public readonly string $name,
        public readonly string $surname
    )
    {
    }
}