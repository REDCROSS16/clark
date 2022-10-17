<?php

namespace App\Fixtures;

use App\Entity\Promotion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PromotionsFixtures extends Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 2; $i++) {
            $promotion = new Promotion();
            $promotion->setAdjustment(mt_rand(10,100) / 100);
            $promotion->setCriteria(['code' => mt_rand(0,10).mt_rand(0,10).'voucher']);
            $promotion->setName('with coder');
            $promotion->setType('fixed_price_voucher');
            $manager->persist($promotion);
        }

        for ($i = 0; $i < 2; $i++) {
            $promotion = new Promotion();
            $promotion->setAdjustment(mt_rand(10,100) / 100);
            $promotion->setCriteria(['from' => '10/10/2000', 'to'=>'20/20/2000']);
            $promotion->setName('dater');
            $promotion->setType('date_range_multiplier');
            $manager->persist($promotion);
        }

        $manager->flush();
    }
}