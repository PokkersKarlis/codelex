<?php

class Product
{
    private array $products = [];

    public function addProduct(string $products): void
    {
        array_push($this->products, $products);
    }

    public function getProduct(): array
    {
        return $this->products;
    }
}
