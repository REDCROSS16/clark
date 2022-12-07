<?php

namespace App\Patterns\Structural\Facade;

class CarEngine
{
    private $type;
    private $isFuelPumpOn = false;
    private $isSparkles = false;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function start(CarElectronics $carElectronics): string
    {
        $carElectronics->prepareEngineStart($this);
        if ($this->isFuelPumpOn && $this->isSparkles) {
            return 'Engine started';
        }

        return 'Engine is broken';
    }

    public function enableFuelPumpOn(): void
    {
        if (!$this->isFuelPumpOn) {
            $this->isFuelPumpOn = true;
        }

    }

    public function enableSparkles(bool $isSparkles): void
    {
        if (!$this->isSparkles) {
            $this->isSparkles = true;
        }
    }
}