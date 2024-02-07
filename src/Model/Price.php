<?php

declare(strict_types=1);

namespace App\Model;

use Spryker\DecimalObject\Decimal;

final readonly class Price
{
    public function __construct(
        private Decimal $salesPrice,
        private ?float $reducedBy = null,
    ) {
    }

    public function isReduced(): bool
    {
        return $this->reducedBy !== null;
    }

    public function getSalesPrice(): Decimal
    {
        return $this->salesPrice;
    }

    public function getReduced(): ?Decimal
    {
        if (!$this->isReduced()) {
            return null;
        }

        return $this->salesPrice
            ->subtract(
                $this->salesPrice->multiply(
                    Decimal::create($this->reducedBy)->divide(100, $this->salesPrice->scale()),
                )
            )
            ->round(2)
        ;
    }

    public function getSaving(): ?float
    {
        if (!$this->isReduced()) {
            return null;
        }

        return $this->reducedBy;
    }

    public function __toString()
    {
       return $this->salesPrice->round(2)->toString(); 
    }
}
