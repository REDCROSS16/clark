<?php

namespace App\Patterns\Factory;

class SimpleFactory implements SimpleFactoryInterface
{
    public function create(string $name, string $surname): User
    {
        return new User($name, $surname);
    }

}