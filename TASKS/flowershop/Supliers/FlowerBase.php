<?php

class FlowerBase implements Supplier
{
    private ProductCollection $products;

    public function __construct()
    {
        $this->products = new ProductCollection();

        $this->products->add(
            new Product(
                new Flower('Tulip'), 5
            ),
            200
        );

        $this->products->add(
            new Product(
                new Flower('Rose'), 10
            ),
            50
        );

        $this->products->add(
            new Product(
                new Flower('Lilly'), 13
            ),
            10
        );
        $this->products->add(
            new Product(
                new Flower('Narcissus'), 13
            ),
            10
        );
    }

    public function products(): ProductCollection
    {
        // TODO: Implement products() method.
        return $this->products;
    }
}