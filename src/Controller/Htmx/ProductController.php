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

class ProductController extends AbstractController
{
    private const PRODUCTS_PER_PAGE = 3;

    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly BasketServiceInterface $basketService,
    ) {
    }

    #[Route("/products", name: 'products',  methods: Request::METHOD_GET)]
    public function products(Request $request): Response
    {
        $page = $request->query->get('page', 1);

        return $this->render(
            "products/products.html.twig",
            [
                "products" => $this->productRepository->findAll(
                    offset: $page * self::PRODUCTS_PER_PAGE,
                    limit: self::PRODUCTS_PER_PAGE,
                ),
                "page" => $page,
            ],
        );
    }

    #[Route("/product/{number}", name: 'product',  methods: Request::METHOD_GET)]
    public function product(string $number, Request $request): Response
    {
        if (!Uuid::isValid($number)) {
            return new Response(
                "invalid product number",
                status: Response::HTTP_BAD_REQUEST,
            );
        }

        return $this->render(
            "products/index.html.twig",
            [
                "product" => $this->productRepository->findByNumber(
                    Uuid::fromRfc4122($number),
                ),
                "basketItemCount" => $this->basketService->getBasketItemCount(
                    $request->getSession(),
                ),
            ],
        );
    }
}
