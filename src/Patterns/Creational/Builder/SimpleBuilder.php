<?php

namespace App\Patterns\Creational\Builder;

class SimpleBuilder implements BuilderInterface
{
    private DesktopComputer $computer;

    public function __construct()
    {
        $this->computer = new DesktopComputer();
    }

    public function resetBuilder(): void
    {
        $this->computer = new DesktopComputer();
    }

    public function addVideoCard(): void
    {
        $this->computer->addComponent('Video card');
    }

    public function addSsdDrive(): void
    {
        $this->computer->addComponent('Ssd driver');
    }

    public function getReadyComputer(): DesktopComputer
    {
        $readyComputer = $this->computer;
        $this->resetBuilder();
        return $readyComputer;
    }
}