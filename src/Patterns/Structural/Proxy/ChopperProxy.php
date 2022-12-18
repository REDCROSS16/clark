<?php

namespace App\Patterns\Structural\Proxy;

class ChopperProxy implements ChopperInterface
{
    private ChopperInterface $chopper;

    public function chop($material): void
    {
        if ($material === 'bush') {
            $this->chopper = new Machete();
            $this->chopper->chop($material);
        } else if ($material === 'tree') {
            $this->chopper = new Axe();
            $this->chopper->chop($material);
        } else {
            echo 'No any';
        }
    }
}