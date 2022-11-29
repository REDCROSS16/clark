<?php

namespace App\Patterns\Creational\SimpleFactory;

interface VehicleEngineInterface
{
    public function setCylindersAmount(int $cylinderAmount): void;

    public function setMaxRPM(int $maxRpm): void;

    public function setFuelType(string $fuelType);
}