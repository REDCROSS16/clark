<?php

namespace App\Tests\Unit;

use App\Entity\Promotion;
use App\Tests\ServiceTestCase;

class PriceModifiersTest extends ServiceTestCase
{
    function dateRangeMultiplierReturnsACorrectrlyModifiedPrice(): void
    {

        $promotionOne = new Promotion();
        $promotionOne->setName('Black');
        $promotionOne->setAdjustment(0.5);
        $promotionOne->setCriteria(['from' => '2022-11-25', 'to' => '2022-11-28']);
        $promotionOne->setType('data_range_multiplier');

        $dateRangeModifier = new DateRangeModifier();

        $modifiedPrice = $dateRangeModifier->modify(100, 5, $promotion, $enquary);

        $this->assertEquals(250, $modifiedPrice);
    }
}