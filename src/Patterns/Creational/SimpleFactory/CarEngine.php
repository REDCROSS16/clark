<?php

namespace App\Patterns\Creational\SimpleFactory;

class CarEngine implements VehicleEngineInterface
{
    private int $cylinderAmount;
    private int $maxRPM;
    private string $fuelType;

    public function getCylinderAmount(): int
    {
        return $this->cylinderAmount;
    }

    public function getMaxRPM(): int
    {
        return $this->maxRPM;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function setCylindersAmount(int $cylinderAmount): void
    {
        $this->cylinderAmount = $cylinderAmount;
    }

    public function setMaxRPM(int $maxRpm): void
    {
        $this->maxRPM = $maxRpm;
    }

    public function setFuelType(string $fuelType)
    {
        $this->fuelType = $fuelType;
    }

    public function __toString(): string
    {
        return "This is a $this->fuelType with $this->maxRPM and $this->cylinderAmount";
    }
}