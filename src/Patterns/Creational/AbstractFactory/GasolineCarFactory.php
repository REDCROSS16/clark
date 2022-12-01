<?php

namespace App\Patterns\Creational\AbstractFactory;

class GasolineCarFactory implements CarFactoryInterface
{

    public function createFuelTank(): FuelTankInterface
    {
        return new GasFuelTank();
    }

    public function createEngine(): EngineInterface
    {
        return new GasEngine();
    }

    public function createTransmission(): TransmissionInterface
    {
        return new AutomaticTransmission();
    }
}