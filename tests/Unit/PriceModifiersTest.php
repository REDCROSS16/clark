<?php

namespace App\Tests\Unit;

use App\DTO\LowestPriceEnquiry;
use App\Entity\Promotion;
use App\Filter\Modifier\DateRangeMultiplier;
use App\Tests\ServiceTestCase;

class PriceModifiersTest extends ServiceTestCase
{
    function dateRangeMultiplierReturnsACorrectrlyModifiedPrice(): void
    {
        $enquary = new LowestPriceEnquiry();
        $enquary->setQuantity(5);
        $enquary->setRequestDate('2022-11-27');

        $promotion = new Promotion();
        $promotion->setName('Black');
        $promotion->setAdjustment(0.5);
        $promotion->setCriteria(['from' => '2022-11-25', 'to' => '2022-11-28']);
        $promotion->setType('data_range_multiplier');

        $dateRangeModifier = new DateRangeMultiplier();

        // update

        $modifiedPrice = $dateRangeModifier->modify(100, 5, $promotion, $enquary);

        $this->assertEquals(250, $modifiedPrice);
    }
}