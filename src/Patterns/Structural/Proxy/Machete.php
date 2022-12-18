<?php

namespace App\Patterns\Structural\Proxy;

class Machete implements ChopperInterface
{

    public function chop($material): void
    {
        echo 'Chop as Machete!';
    }
}