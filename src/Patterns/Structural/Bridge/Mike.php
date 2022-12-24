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
        return $this->name;
    }

    public function startEngine(): void
    {
        echo 'ggggg';
    }

    public function startDriving(): void
    {
        echo 'car is riding';
    }

    public function crash(): void
    {
        echo 'lock';
    }
}