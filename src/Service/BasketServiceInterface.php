<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\Product;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

interface BasketServiceInterface
{
    public function getBasketItemCount(SessionInterface $currentSession): int;

    public function addProductToBasket(
        Product $product,
        SessionInterface $currentSession,
    ): int;
}
