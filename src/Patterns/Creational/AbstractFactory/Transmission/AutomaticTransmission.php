<?php

namespace App\Patterns\Creational\AbstractFactory\Transmission;

use App\Patterns\Creational\AbstractFactory\TransmissionInterface;

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