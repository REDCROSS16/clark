<?php

namespace App\Patterns\Creational\AbstractFactory;

interface FuelTankInterface
{
    public function getAllowableFuel(): string;

    public function getCapacity(): string;
}