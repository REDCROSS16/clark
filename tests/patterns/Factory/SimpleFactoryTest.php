<?php

namespace App\Tests\patterns\Factory;


use App\Patterns\Creational\SimpleFactory\CarEngineFactory;
use App\Patterns\Creational\SimpleFactory\VehicleEngineInterface;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testIsFactoryWork()
    {
        $factory = new CarEngineFactory();

        $engine = $factory->makeCarEngine('GAS');

        $this->assertInstanceOf(VehicleEngineInterface::class, $engine);
        $this->assertSame(2000, $engine->getMaxRPM());
    }
}