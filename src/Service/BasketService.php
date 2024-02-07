<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\Product;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Don't do this in production, this is just a PoC. In production you should
 * use a database and a repository to handle this stuff.
 */  
final readonly class BasketService implements BasketServiceInterface
{
    public function getBasketItemCount(SessionInterface $currentSession): int
    {
        $basket = $currentSession->get('basket');
        if ($basket === null || !array_key_exists('items', $basket)) {
            $basket = ['items' => []];
        }

        return count($basket['items']);
    }

    public function addProductToBasket(
        Product $product,
        SessionInterface $currentSession,
    ): int {
        $basket = $currentSession->get('basket');
        if ($basket === null || !array_key_exists('items', $basket)) {
            $basket = ['items' => []];
        }

        $number = $product->getNumber()->toRfc4122();
        $itemCount = $basket['items'][$number] ?? 0;
        $basket['items'][$number] = ++$itemCount;

        $currentSession->set('basket', $basket);

        return count($basket['items']);
    }
}

