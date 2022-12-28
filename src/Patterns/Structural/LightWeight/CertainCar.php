<?php

namespace App\Patterns\Structural\LightWeight;

class CertainCar
{
    public string $owner;
    public string $manufacturer;

    private CarVariation $carVariation;


    public function __construct(string $owner, string $manufacturer, CarVariation $carVariation)
    {
        $this->owner = $owner;
        $this->manufacturer = $manufacturer;
        $this->carVariation = $carVariation;
    }

    public function describeCertainCar(): void
    {
        $this->carVariation->describeCar($this->owner, $this->manufacturer);
    }
}