<?php

namespace App\Patterns\Factory;

class CarEngineFactory
{
    public function makeCarEngine(string $type): VehicleEngineInterface
    {
        $engine = new CarEngine();

        switch ($type) {
            case 'GAS':
                $engine->setFuelType('FUEL');
                $engine->setCylindersAmount(5);
                $engine->setMaxRPM(2000);
                return $engine;
            case 'DIESEL':
                $engine->setFuelType('DIESEL');
                $engine->setCylindersAmount(3);
                $engine->setMaxRPM(5000);
                return $engine;
            default:
                echo 'incorrect engine type';
        }
    }
}