<?php

namespace App\Patterns\Structural\Facade;

class CarLikeFacade
{
    private CarElectronics $carElectronics;
    private CarEngine $carEngine;

    public function __construct(
        CarElectronics $carElectronics = null,
        CarEngine $carEngine = null
    )
    {
        $this->carEngine = $carEngine ?: new CarElectronics('Default');
        $this->carElectronics = $carElectronics ?: new CarEngine('default');
    }

    public function startCar()
    {
        $start = $this->carElectronics->getAllSystemEnable();
        $this->carEngine->start($this->carElectronics);
    }


}