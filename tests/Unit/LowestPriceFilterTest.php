<?php

namespace App\Tests\Unit;

use App\DTO\LowestPriceEnquiry;
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

        // Given

        // When

        // Then
    }

    private function promotionsDataProvider()
    {
        // update it
    }
}