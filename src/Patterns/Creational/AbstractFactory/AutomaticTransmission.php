<?php

namespace App\Patterns\Creational\AbstractFactory;

class AutomaticTransmission implements TransmissionInterface
{
    protected string $transmissionType;

    public function __construct()
    {
        $this->transmissionType = 'automatic';
    }

    public function getTransmissionType(): string
    {
        return $this->transmissionType;
    }
}