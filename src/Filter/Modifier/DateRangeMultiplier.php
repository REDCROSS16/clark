<?php

namespace App\Filter\Modifier;

use App\DTO\PromotionEnquiryInterface;
use App\Entity\Promotion;

class DateRangeMultiplier implements  PriceModifierInterface
{
    public function modify(int $price, int $quntity, Promotion $promotion, PromotionEnquiryInterface $enquiry): int
    {
        // TODO: Implement modify() method.
    }

}