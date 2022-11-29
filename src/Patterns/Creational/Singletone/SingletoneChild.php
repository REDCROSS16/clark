<?php

namespace App\Patterns\Creational\Singletone;

class SingletoneChild extends Singleton
{
    public function singletoneLogic()
    {
        echo 'I a child!';
    }

}