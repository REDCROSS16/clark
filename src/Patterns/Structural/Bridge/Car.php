<?php

namespace App\Patterns\Structural\Bridge;

class Car extends Vehicle
{

    public function drvie(): void
    {
        echo 'drive car';
        $this->driver->startEngine();
        $this->driver->startDriving();
    }
}