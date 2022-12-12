<?php

namespace App\Patterns\Structural\Adapter;

class Car implements FourWheelVehiclesInterface
{

    public function ride(): string
    {
        return 'ride car';
    }
}