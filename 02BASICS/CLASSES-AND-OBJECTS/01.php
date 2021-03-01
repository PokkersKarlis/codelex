<?php

//Codelex trainig courses
//Section "classes-and-objects" - exercise 01
//Author - K.Pokkers

class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $priceAtStart, int $amountAtStart)
    {
        $this->name = $name;
        $this->price = $priceAtStart;
        $this->amount = $amountAtStart;
    }

    public function printProduct():string
    {
        return $this->name . ' price ' . $this->price . ' EUR amount ' . $this->amount;
    }

    public function setPrice(float $price):void
    {
        $this->price = $price;
    }

    public function setAmount(int $amount):void
    {
        $this->amount = $amount;
    }
}

$products = [
    new Product('Logitech mouse', 70.00, 14),
    new Product('iPhone 5s', 999.99, 3),
    new Product('Epson EB-U05', 440.46, 1)
];

foreach ($products as $product) {
    echo $product->printProduct() . PHP_EOL;
}
$products[0]->setPrice(35.01);
$products[0]->setAmount(5);
echo '-----     New prices      -----' . PHP_EOL;
foreach ($products as $product) {
    echo $product->printProduct() . PHP_EOL;
}



