<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Product;
use Symfony\Component\Uid\Uuid;

interface ProductRepositoryInterface
{
    /**
     * @return array<Product>
     */ 
    public function findAll(?int $limit = null, ?int $offset = null): array;

    /**
     * @return array<Product>
     */ 
    public function findByName(string $name): array;

    public function findByNumber(Uuid $number): Product|null;
}
