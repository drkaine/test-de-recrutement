<?php

declare(strict_types=1);

namespace App;

class Movie
{
    private string $title;
    private int $priceCode;

    public function __construct(string $title, int $priceCode)
    {
        $this->title = $title;
        $this->priceCode = $priceCode;
    }

    public function getPriceCode(): int
    {
        return $this->priceCode;
    }

    public function setPriceCode(int $priceCode)
    {
        return $this->priceCode = $priceCode;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}