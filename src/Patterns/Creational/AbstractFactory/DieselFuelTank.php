<?php

namespace App\Patterns\Creational\AbstractFactory;

class DieselFuelTank implements FuelTankInterface
{

    protected string $allowableFuel;
    protected string $capacity;

    public function __construct()
    {
        $this->allowableFuel = 'DIESEL';
        $this->capacity = '100';
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