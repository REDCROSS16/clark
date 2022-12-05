<?php

namespace App\Patterns\Creational\Builder;

class HardCoreBuilder implements BuilderInterface
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
        $this->computer->addComponent('4090 GTX');
    }

    public function addSsdDrive(): void
    {
        $this->computer->addComponent('4TB SSD');
    }

    public function getReadyComputer(): DesktopComputer
    {
        $readyComputer = $this->computer;
        $this->resetBuilder();
        return $readyComputer;
    }
}