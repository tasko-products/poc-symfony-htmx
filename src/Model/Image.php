<?php

declare(strict_types=1);

namespace App\Model;

final readonly class Image
{
    public function __construct(
        private string $url,
        private string $alt, 
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAlt(): string
    {
        return $this->alt;
    }
}
