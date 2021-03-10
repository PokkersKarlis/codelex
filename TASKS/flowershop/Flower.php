<?php

class Flower

{
    private string $name;
    private int $quantity;
    private int $price;
    public function __construct (string $name, int $quantity, int $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}