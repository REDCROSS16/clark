<?php

namespace App\Tests\patterns\Factory;

use App\Patterns\Factory\SimpleFactory;
use App\Patterns\Factory\User;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCreateUserFactory()
    {
        $factory = new SimpleFactory();
        $user = $factory->create('alex', 'podolnitsky');

        $this->assertInstanceOf(User::class, $user);
        $this->assertSame('alex', $user->getName());
    }
}