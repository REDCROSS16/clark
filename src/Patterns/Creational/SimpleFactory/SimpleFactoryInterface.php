<?php

namespace App\Patterns\Creational\SimpleFactory;

interface SimpleFactoryInterface
{
    public function create(string $name, string $surname);
}