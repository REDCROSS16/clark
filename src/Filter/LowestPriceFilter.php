<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;
use App\Entity\Promotion;

class LowestPriceFilter implements PromotionsFilterInterface
{

    public function apply(PromotionEnquiryInterface $enquiry, Promotion ...$promotion): PromotionEnquiryInterface
    {

        $price = $enquiry->getProduct()->getPrice();
        $quantity = $enquiry->getQuantity();
        $lowestPrice = $price * $quantity;

        $priceModifier = $this->priceModifierFactor->create();

        $enquiry->setDiscountedPrice(50);
        $enquiry->setPrice(500);
        $enquiry->setPromotionId(2);
        $enquiry->setPromotionName('Black friday');

        return $enquiry;
    }
}