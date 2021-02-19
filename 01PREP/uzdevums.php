<?php


//Products basket

$products = [
    [
        'name' => 'Tank',
        'price' => 1000000
    ],
    [
        'name' => 'Niere',
        'price' => 75000
    ],
    [
        'name' => 'Auto',
        'price' => 15000
    ],
    [
        'name' => 'Krūze',
        'price' => 5
    ],
    [
        'name' => 'Maize',
        'price' => 1
    ]
];

//Display products for ordering

foreach ($products as $listNumber => $product)
{
    echo $listNumber . ' Product: ' . $product['name'] . ' -> price: $' . $product['price'] . PHP_EOL;
}

//Product and amount selection

$productSelect = readline("Select product: ");
if($productSelect < count($products)) {
    $amountSelect = readline("Select amount: ");


//Invoice calculation and output

    $total = $products[$productSelect]['price'] * $amountSelect;
    echo 'You ordered ' . $amountSelect . ' ' . $products[$productSelect]['name'] . ' and you must pay $' . $total;
}else
    {
    echo 'Your entered product number is not valid';
}









