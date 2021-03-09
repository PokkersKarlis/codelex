<?php

class Recipe
{
    private string $name;
    private array $products = [];

    public function __construct(string $name, string ...$products)
    {
        $this->name = $name;
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}