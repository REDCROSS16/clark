<?php

namespace App\Patterns\Creational\AbstractFactory;

interface EngineInterface
{
    public function getFuelType(): string;

    public function getMaxRPM(): int;
}