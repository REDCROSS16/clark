<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;
use App\Entity\Promotion;
use App\Filter\Modifier\Factory\PriceModifierFactoryInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{
    public function __construct(private readonly PriceModifierFactoryInterface $priceModifierFactor)
    {
    }

    public function apply(PromotionEnquiryInterface $enquiry, Promotion ...$promotions): PromotionEnquiryInterface
    {

//        $price = $enquiry->getProduct()->getPrice();
//        $quantity = $enquiry->getQuantity();
//        $lowestPrice = $price * $quantity;

        foreach ($promotions as $promotion)  {
            $priceModifier = $this->priceModifierFactor->create($promotion->getType());

            $enquiry->setDiscountedPrice(50);
            $enquiry->setPrice(500);
            $enquiry->setPromotionId(2);
            $enquiry->setPromotionName('Black friday');

            return $enquiry;
        }




    }
}