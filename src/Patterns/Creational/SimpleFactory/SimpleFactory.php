<?php

namespace App\Patterns\Creational\SimpleFactory;

class SimpleFactory implements SimpleFactoryInterface
{
    public function create(string $name, string $surname): User
    {
        return new User($name, $surname);
    }

}