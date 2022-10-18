<?php

namespace App\Controller;

use App\Component\Tools\Procent;
use App\DTO\LowestPriceEnquiry;
use App\Entity\Promotion;
use App\Filter\PromotionsFilterInterface;
use App\Repository\ProductRepository;
use App\Repository\PromotionRepository;
use App\Service\Serializer\DTOSerializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Products extends AbstractController
{
    public function __construct(
        private ProductRepository $productRepository,
        private readonly EntityManagerInterface $entityManager)
    {
    }

    #[Route('/products/{id<\d>}/lowest-price', name: '', methods: ['POST'])]
    public function lowestPrice(
        Request $request,
        int $id,
        DTOSerializer $serializer,
        PromotionsFilterInterface $promotionsFilter): Response
    {

        if ($request->headers->has('force_fail')) {
            return new JsonResponse(['error' => 'Promotions Engine failure message'],
                $request->headers->get('force_fail')
            );
        }

        $product = $this->productRepository->find($id);



        /** @var LowestPriceEnquiry $lowestPriceEnquiry */
        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        $lowestPriceEnquiry->setProductId($product);

        $promotions = $this->entityManager->getRepository(Promotion::class)->findValidForProduct(
            $product,
            date_create_immutable($lowestPriceEnquiry->getRequestDate())
        )



        $modifiedEnquiry = $promotionsFilter->apply($lowestPriceEnquiry, $promotions);

        $responseContent = $serializer->serialize($modifiedEnquiry, 'json');

        return new Response($responseContent);
    }
    
    #[Route('/products/{id<\d>}/promotions', name: 'promotions', methods: ['GET'])]
    public function promotions(): Response
    {
        return new Response('');
    }
}