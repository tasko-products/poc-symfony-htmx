<?php

declare(strict_types=1);

namespace App\Controller\Htmx;

use App\Repository\ProductRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SearchController extends AbstractController
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
    ) {
    }

    #[Route("/search", name: "search",  methods: Request::METHOD_GET)]
    public function search(Request $request): Response
    {
        $query = $request->query->get('query');
        if ($query === null) {
            return $this->render("search/404.html.twig");
        }

        return $this->render(
            "search/products.html.twig",
            [
                "products" => $this->productRepository->findByName($query),
            ],
        );
    }
}
