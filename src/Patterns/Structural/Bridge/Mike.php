<?php

namespace App\Patterns\Structural\Bridge;

class Mike implements DriverInterface
{
    protected  string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function startEngine(): void
    {
        // TODO: Implement startEngine() method.
    }

    public function startDriving(): void
    {
        // TODO: Implement startDriving() method.
    }

    public function crash(): void
    {
        // TODO: Implement crash() method.
    }
}