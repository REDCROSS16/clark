<?php

namespace App\Patterns\Factory;

interface SimpleFactoryInterface
{
    public function create(string $name, string $surname);
}