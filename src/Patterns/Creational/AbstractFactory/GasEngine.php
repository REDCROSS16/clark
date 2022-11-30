<?php

namespace App\Patterns\Creational\AbstractFactory;

class GasEngine implements EngineInterface
{
    protected $fuelType;
    protected $maxRPM;

    public function __construct(
    )
    {
        $this->fuelType = 'Gasoline';
        $this->maxRPM = 9000;
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