<?php

namespace App\Patterns\Structural\Proxy;

class Axe implements ChopperInterface
{

    public function chop($material): void
    {
        echo 'chop as AXE';
    }
}