<?php

namespace App\Patterns\Creational\AbstractFactory;

class CarAssembler
{
    private $carFactory;
    private $car = [];

    public function __construct(CarFactoryInterface $carFactory)
    {
        $this->carFactory = $carFactory;
    }

    public function assembleCar(): void
    {
        $this->car['engine'] = $this->carFactory->createEngine();
        $this->car['fuelTank'] = $this->carFactory->createFuelTank();
        $this->carFactory['transmission'] = $this->carFactory->createTransmission();
    }

    public function describeCar(): void
    {
        print_r($this->car);
    }

    public function provideCar(): array
    {
        return $this->car;
    }

    public function resetCar(): array
    {
        return $this->car = [];
    }

    public function changeFactory(CarFactoryInterface $carFactory): void
    {
        $this->carFactory = $carFactory;
    }
}