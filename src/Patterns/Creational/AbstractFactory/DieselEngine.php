<?php

namespace App\Patterns\Creational\AbstractFactory;

class DieselEngine implements EngineInterface
{
    protected string $fuelType;
    protected int $maxRPM;

    public function __construct()
    {
        $this->fuelType = 'Diesel';
        $this->maxRPM = 2000;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getMaxRPM(): int
    {
        return $this->maxRPM;
    }
}