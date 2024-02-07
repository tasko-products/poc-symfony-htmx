<?php

declare(strict_types=1);

namespace App\Model;

use Symfony\Component\Uid\Uuid;

final readonly class Product
{
    public function __construct(
        private Uuid $number,
        private string $name,
        private string $brand,
        private Image $listingImage,
        private Price $price,
        private bool $isNew,
    ) {
    }

    public function getNumber(): Uuid
    {
        return $this->number;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getListingImage(): Image
    {
        return $this->listingImage;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function getLabel(): string
    {
        if ($this->price->isReduced()) {
            return sprintf(
                '- %s%%',
                $this->price->getSaving(),
            );
        }

        return $this->isNew
            ? 'New'
            : ''
        ;
    }
}
