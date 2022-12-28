<?php

namespace App\Patterns\Structural\LightWeight;

class CarVariation
{
    private string $color;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getBodyType(): string
    {
        return $this->bodyType;
    }

    /**
     * @return string
     */
    public function getTransmissionType(): string
    {
        return $this->transmissionType;
    }
    private string $bodyType;
    private string $transmissionType;

    public function __construct(string $color, string $bodyType, string $transmissionType)
    {
        $this->color = $color;
        $this->bodyType = $bodyType;
        $this->transmissionType = $transmissionType;
    }

    public function describeCar(string $owner, string $manufacturer): void
    {
        echo 'Owner: ' . $owner . PHP_EOL;
        echo 'Manufacturer: ' . $manufacturer . PHP_EOL;
        echo 'Color is: ' . $this->color . PHP_EOL;
        echo 'Body type: ' . $this->bodyType . PHP_EOL;
        echo 'Transmission type: ' . $this->transmissionType . PHP_EOL;
    }
}