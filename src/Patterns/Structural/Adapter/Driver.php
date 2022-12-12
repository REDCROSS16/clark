<?php

namespace App\Patterns\Structural\Adapter;

class Driver
{
    public function showRide(FourWheelVehiclesInterface $vehicle)
    {
        $vehicle->ride();
    }
}