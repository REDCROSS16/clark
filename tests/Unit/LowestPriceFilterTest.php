<?php

namespace App\Tests\Unit;

use App\Tests\ServiceTestCase;

class LowestPriceFilterTest extends ServiceTestCase
{
    /** @test */
    public function lowest_price_promotions_filtering_is_applied_correctly(): void
    {
        $filterEnquiry = $lowestPriceFilter->apply($enquiry, ...$promotions);

        $this->assertSame(500, $filterEnquiry->getPrice());
        $this->assertSame(50, $filterEnquiry->getDiscountedPrice());
        $this->assertSame('Black friday', $filterEnquiry->getPromotionName());

        // Given

        // When

        // Then
    }
}