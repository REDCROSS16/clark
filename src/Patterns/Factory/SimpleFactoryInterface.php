<?php

namespace App\Patterns\Factory;

interface SimpleFactoryInterface
{
    public function create(): self;
}