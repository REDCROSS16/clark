<?php

namespace App\Tests\Unit;

use App\DTO\LowestPriceEnquiry;
use App\Entity\Promotion;
use App\Filter\Modifier\DateRangeMultiplier;
use App\Filter\Modifier\EvenItemsMultiplier;
use App\Tests\ServiceTestCase;

class PriceModifiersTest extends ServiceTestCase
{
    /** @test */
    public function dateRangeMultiplierReturnsACorrectrlyModifiedPrice(): void
    {
        $enquary = new LowestPriceEnquiry();
        $enquary->setQuantity(5);
        $enquary->setRequestDate('2022-11-27');

        $promotion = new Promotion();
        $promotion->setName('Black');
        $promotion->setAdjustment(0.5);
        $promotion->setCriteria(['from' => '2022-11-25', 'to' => '2022-11-28']);
        $promotion->setType('data_range_multiplier');

        $dateRangeMultiplier = new DateRangeMultiplier();
        $modifiedPrice = $dateRangeMultiplier->modify(100, 5, $promotion, $enquary);

        $this->assertEquals(500, $modifiedPrice);

        $promotion = new Promotion();
        $promotion->setName('Bue one get one free');
        $promotion->setAdjustment(0.5);
        $promotion->setCriteria(['minimum_quantity' => 2]);
        $promotion->setType('even_times_multiplier');


        $evenItemsMultiplier = new EvenItemsMultiplier();

        $modifiedPrice = $evenItemsMultiplier->modify(100, 5, $promotion, $enquary);

        $this->assertSame(300, $modifiedPrice);
    }
}