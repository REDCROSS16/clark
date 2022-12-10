<?php

namespace App\Patterns\Structural\Composite;

class NailBox implements NailInterface
{
    private int $price;
    private array $container;

    public function getPrice()
    {
        return $this->price;
    }

    public function addItem(NailInterface $nailOrNails): void
    {
        $this->price += $nailOrNails->getPrice();
        $this->container[] = $nailOrNails;
    }

}