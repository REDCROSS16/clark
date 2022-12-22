<?php

namespace App\Patterns\Structural\Bridge;

interface DriverInterface
{
    public function getName(): string;

    public function startEngine(): void;

    public function startDriving(): void;

    public function crash(): void;
}