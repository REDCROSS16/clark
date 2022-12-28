<?php

namespace App\Patterns\Structural\LightWeight;

class CarDatabase
{
    private array $carVariations = [];
    private array $certainCars = [];


    public function addCar(string $owner, string $manufacturer, string $color, string $bodyType, string $transmissionType)
    {
        $carVariation = $this->getCarVariations($color, $bodyType, $transmissionType);

        if (null === $carVariation) {
            $carVariation = new CarVariation($color, $bodyType, $transmissionType);
            $this->carVariations[] = $carVariation;
        }

        $this->certainCars[] = new CertainCar($owner, $manufacturer, $carVariation);
    }

    public function getCarVariation(string $color, string $bodyType, string $transmissionType): ?CarVariation
    {
        for ($i = 0; $i < sizeof($this->carVariations); $i++) {
            if ($this->carVariations[$i]->getColor() === $color &&
                $this->carVariations[$i]->getBodyType() === $bodyType &&
                $this->carVariations[$i]->getTransmission() === $transmissionType) {
                return $this->carVariations[$i];
            }
        }

        return null;
    }


    public function printCertainCars()
    {
        echo 'Cars:';
        foreach ( $this->certainCars as $car) {

            /** @var CertainCar $car */
            $car->describeCertainCar();
            echo '<br>';
        }
    }

    public function printCarVariations()
    {
        echo 'Variations: ' . PHP_EOL;
        foreach ($this->carVariations as $variation) {
            /** @var CarVariation $variation */
            $variation->describeCar('No owner', 'no manufacturer');
        }
    }

}