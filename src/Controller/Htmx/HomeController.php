<?php

declare(strict_types=1);

namespace App\Controller\Htmx;

use App\Repository\ProductRepositoryInterface;
use App\Service\BasketServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly BasketServiceInterface $basketService,
    ) {
    }

    #[Route("/", name: "home")]
    public function home(Request $request): Response
    {
        return $this->render(
            "home/index.html.twig",
            [
                "products" => $this->productRepository->findAll(
                    offset: 0,
                    limit: 6,
                ),
                "page" => 1,
                "basketItemCount" => $this->basketService->getBasketItemCount(
                    $request->getSession(),
                ),
            ],
        );
    }

}
