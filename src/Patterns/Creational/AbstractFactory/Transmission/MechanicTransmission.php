<?php

namespace App\Patterns\Creational\AbstractFactory\Transmission;

use App\Patterns\Creational\AbstractFactory\TransmissionInterface;

class MechanicTransmission implements TransmissionInterface
{
    protected string $transmissionType;

    public function __construct()
    {
        $this->transmissionType = 'mechanic';
    }

    public function getTransmissionType(): string
    {
        return $this->transmissionType;
    }
}