<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Products extends AbstractController
{
    #[Route('/', name: '', methods: ['GET'])]
    public function lowerPrice()
    {
        
    }
    
    #[Route('/products/{id}/promotions', name: 'promotions', methods: ['GET'])]
    public function promotions()
    {

    }
}