<?php

namespace App\Filter\Modifier;

use App\DTO\PromotionEnquiryInterface;
use App\Entity\Promotion;

class EvenItemsMultiplier implements PriceModifierInterface
{

    public function modify(int $price, int $quntity, Promotion $promotion, PromotionEnquiryInterface $enquiry): int
    {
        if ($quntity < 2) {
            return $price * $quntity;
        }

        $oddCount = $quntity % 2;
        $evenCount = $quntity - $oddCount;

    }
}