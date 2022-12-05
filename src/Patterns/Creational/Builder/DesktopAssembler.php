<?php

namespace App\Patterns\Creational\Builder;

class DesktopAssembler
{
    public function assembleSimpleDesktop(): DesktopComputer
    {
        $builder = new SimpleBuilder();
        $builder->addSsdDrive();
        $builder->addVideoCard();

        return $builder->getReadyComputer();
    }

    public function getHardDesktop(): DesktopComputer
    {
        $builder = new HardCoreBuilder();
        $builder->addVideoCard();
        $builder->addSsdDrive();

        return $builder->getReadyComputer();
    }
}