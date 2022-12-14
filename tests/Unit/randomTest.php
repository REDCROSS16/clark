<?php

namespace App\Tests\Unit;

use App\Patterns\Creational\SimpleFactory\User;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class randomTest extends  WebTestCase
{
    /** @test */
    public function canIGetVariableOnLinkAfterGarbaggeCollecterRemove()
    {
        $a = new User('13', '2');
        $b = $a;
        unset($a);
        $d = $b;
        $this->assertSame($b, $d);
    }
}