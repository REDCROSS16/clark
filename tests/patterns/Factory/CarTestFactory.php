<?php

namespace App\Tests\patterns\Factory;

use App\Patterns\Factory\CarEngine;
use App\Patterns\Factory\CarEngineFactory;
use App\Patterns\Factory\VehicleEngineInterface;
use PHPUnit\Framework\TestCase;

class CarTestFactory extends TestCase
{
    public function testIsFactoryWork()
    {
        $factory = new CarEngineFactory();

        $engine = $factory->makeCarEngine('GAS');

        $this->assertInstanceOf(VehicleEngineInterface::class, $engine);
        $this->assertSame(2000, $engine->getMaxRPM());
    }
}