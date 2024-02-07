<?php

declare(strict_types=1);

namespace App\Controller\Htmx;

use App\Repository\ProductRepositoryInterface;
use App\Service\BasketServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Uid\Uuid;

class BasketController extends AbstractController
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly BasketServiceInterface $basketService,
    ) {
    }

    #[Route("/add-to-basket", name: 'add-to-basket',  methods: Request::METHOD_POST)]
    public function products(Request $request): Response
    {
        $number = $request->get('number');
        if ($number === null) {
            return new Response(
                'missing required number parameter',
                status: Response::HTTP_BAD_REQUEST,
            );  
        }

        if (!is_string($number) || !Uuid::isValid($number)) {
            return new Response(
                'invalid required number parameter',
                status: Response::HTTP_BAD_REQUEST,
            );  
        }

        $product = $this->productRepository->findByNumber(
            Uuid::fromRfc4122($number),
        );

        if ($product === null) {
            return new Response(
                'not found',
                status: Response::HTTP_NOT_FOUND,
            );  
        }

        $itemCount = $this->basketService->addProductToBasket(
            $product,
            $request->getSession()
        );

        return new Response((string)$itemCount, status: Response::HTTP_OK);
    }
}
