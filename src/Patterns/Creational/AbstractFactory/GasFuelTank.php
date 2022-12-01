<?php

namespace App\Patterns\Creational\AbstractFactory;

class GasFuelTank implements FuelTankInterface
{
    protected string $allowableFuel;
    protected string $capacity;

    public function __construct()
    {
        $this->allowableFuel = 'GAS';
        $this->capacity = '50';
    }

    public function getAllowableFuel(): string
    {
        return $this->allowableFuel;
    }

    public function getCapacity(): string
    {
        return $this->capacity;
    }
}