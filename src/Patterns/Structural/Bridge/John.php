<?php

namespace App\Patterns\Structural\Bridge;

class John implements DriverInterface
{
    private string $name;

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
        echo 'rrrr rrr rrr';
    }

    public function startDriving(): void
    {
        echo 'engine starts';
    }

    public function crash(): void
    {
        echo 'bdish';
    }
}