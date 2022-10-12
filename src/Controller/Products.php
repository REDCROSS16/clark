<?php

namespace App\Controller;

use App\Component\Tools\Procent;
use App\DTO\LowestPriceEnquiry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Products extends AbstractController
{
    public function __construct()
    {
    }

    #[Route('/products/{id<\d>}/lowest-price', name: '', methods: ['POST'])]
    public function lowestPrice(Request $request, int $id, SerializerInterface $serializer): Response
    {

        if ($request->headers->has('force_fail')) {
            return new JsonResponse(['error' => 'Promotions Engine failure message'],
                $request->headers->get('force_fail')
            );
        }

        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

//        1. deserialize json data into enquireDTO
//        2. pass the enquire into a promotions filter
//        3. return the modified enquire

//        return new JsonResponse($result, 200);
    }
    
    #[Route('/products/{id<\d>}/promotions', name: 'promotions', methods: ['GET'])]
    public function promotions(): Response
    {
        return new Response('');
    }
}