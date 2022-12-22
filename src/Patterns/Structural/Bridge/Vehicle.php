<?php

namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Adapter\Driver;

abstract class Vehicle
{
    protected Driver $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function changeDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    abstract public function drvie(): void;
}