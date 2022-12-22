<?php

namespace App\Patterns\Structural\Bridge;

class Bike extends Vehicle
{

    public function drvie(): void
    {
        echo 'drive bike';
        $this->driver->startEngine();
        $this->driver->crash();
    }
}