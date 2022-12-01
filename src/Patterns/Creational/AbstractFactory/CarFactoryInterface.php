<?php

namespace App\Patterns\Creational\AbstractFactory;

interface CarFactoryInterface
{
    public function createFuelTank(): FuelTankInterface;
    public function createEngine(): EngineInterface;
    public function createTransmission(): TransmissionInterface;
}