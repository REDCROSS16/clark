<?php

namespace App\Patterns\Factory;

class CarEngine implements VehicleEngineInterface
{
    private int $cylinderAmount;
    private int $maxRPM;
    private string $fuelType;


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
        // TODO: Implement setFuelType() method.
    }
}