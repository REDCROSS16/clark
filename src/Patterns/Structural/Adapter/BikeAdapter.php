<?php

namespace App\Patterns\Structural\Adapter;

// Adapter between car and driver
class BikeAdapter implements FourWheelVehiclesInterface
{
    private Bike $bike;

    public function __construct(Bike $bike)
    {
        $this->bike = $bike;
    }

    public function ride(): string
    {
        return $this->bike->rideBike();
    }

}