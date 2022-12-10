<?php

namespace App\Patterns\Structural\Composite;

class Nail implements NailInterface
{
    private int $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}