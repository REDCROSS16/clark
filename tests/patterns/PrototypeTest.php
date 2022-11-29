<?php

namespace App\Tests\patterns;

use App\Patterns\Creational\Prototype\Prototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testIsPrototype()
    {
        $first = new Prototype('Object FIRST', 2);
        $cloned = clone $first;

        $this->assertSame(3, $cloned->getObjectID());
        $this->assertSame('Object FIRST CLONED', $cloned->getObjectName()

        );
    }
}