`<?php

namespace App\Tests\Unit;

use App\DTO\LowestPriceEnquiry;
use App\Entity\Promotion;
use App\Filter\LowestPriceFilter;
use App\Tests\ServiceTestCase;

class LowestPriceFilterTest extends ServiceTestCase
{
    /** @test */
    public function lowest_price_promotions_filtering_is_applied_correctly(): void
    {
        $enquiry = new LowestPriceEnquiry();
        $promotions = $this->promotionsDataProvider();
        $lowestPriceFilter = $this->container->get(LowestPriceFilter::class);
        $filteredEnquiry = $lowestPriceFilter->apply($enquiry, ...$promotions);

        $this->assertSame(500, $filteredEnquiry->getPrice());
        $this->assertSame(50, $filteredEnquiry->getDiscountedPrice());
        $this->assertSame('Black friday', $filteredEnquiry->getPromotionName());
    }

    private function promotionsDataProvider(): array
    {
        $promotionOne = new Promotion();
        $promotionOne->setName('Black');
        $promotionOne->setAdjustment(0.5);
        $promotionOne->setCriteria(['from' => '2022-11-25', 'to' => '2022-11-28']);
        $promotionOne->setType('date_range_multiplier');

        return [$promotionOne];
    }
}