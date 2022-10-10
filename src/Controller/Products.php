<?php

namespace App\Controller;

use App\Component\Tools\Procent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Products extends AbstractController
{
    public function __construct(private readonly Procent)
    {
    }

    #[Route('/products/{id<\d>}/lowest-price', name: '', methods: ['POST'])]
    public function lowestPrice(Request $request,int $id): Response
    {
        $data = '3.15';
        $result = Procent::from($data);


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