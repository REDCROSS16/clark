<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{

    public function apply(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface
    {
        $enquiry->setDiscountedPrice(50);
        $enquiry->setPrice(500);
        $enquiry->setPromotionId(2);
    }
}