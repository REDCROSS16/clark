<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Products extends AbstractController
{
    #[Route('/products/{id<\d>}/lowest-price', name: '', methods: ['POST'])]
    public function lowestPrice(Request $request,int $id): Response
    {
        if ($request->headers->has(''))
        return new Response(
            [
                'name' => 'alex',
                'age' => 29,
                'id' => $id
            ], 200
        );
    }
    
    #[Route('/products/{id}/promotions', name: 'promotions', methods: ['GET'])]
    public function promotions(): Response
    {

    }
}