<?php

namespace App\Patterns\Creational\Builder;

interface BuilderInterface
{
    public function resetBuilder(): void;

    public function addVideoCard(): void;

    public function addSsdDrive(): void;

    public function getReadyComputer(): DesktopComputer;
}