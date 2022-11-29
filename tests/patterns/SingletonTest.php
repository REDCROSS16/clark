<?php

namespace App\Tests\patterns;

use App\Patterns\Creational\Singletone\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testIsSingleton()
    {
        $singleton = Singleton::getInstance();
        dd($singleton->printName());
    }
}