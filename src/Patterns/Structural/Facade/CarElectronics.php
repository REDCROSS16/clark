<?php

namespace App\Patterns\Structural\Facade;

class CarElectronics
{
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getAllSystemEnable(): string
    {
        return 'All system of ' . $this->type . ' enabled';
    }
}