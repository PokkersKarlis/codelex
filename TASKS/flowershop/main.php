<?php

require_once 'Interfaces/Sellable.php';
require_once 'Interfaces/Supplier.php';
require_once 'Sellables/Flower.php';
require_once 'Supliers/FlowerBase.php';
require_once 'ProductCollection.php';
require_once 'Product.php';
require_once 'Shop.php';
require_once 'Order.php';

$shop = new Shop();
$shop->addSupplier(new FlowerBase);
$order = new Order();


foreach ($shop->products()->all() as ['product' => $product, 'amount' => $amount]) {
    echo $product->sellable()->name() . ' -> price: ' . $product->price() . ' in store ( ' . $amount . ' )' . PHP_EOL;
    $order->addProductData($product->sellable()->name(), $amount, $product->price());
}

do {
    $person = readline('Enter your gender -> male/female: ');
} while ($person !== 'male' && $person !== 'female');

$order->setPerson($person);
$order->setProductNames();

do {
    $selectProduct = readline('Please select Flowers: ' . implode(', ', $order->getProductNames()));
} while (!in_array($selectProduct, $order->getProductNames()));

$order->setSelectedProduct($selectProduct);

do {
    $amount = readline('Enter amount...');
} while (!filter_var($amount, FILTER_VALIDATE_INT) || $amount > $order->getProductData()[$selectProduct][0]);

$order->setAmount($amount);

echo 'You ordered :' . $order->getAmount() . ' ' . $order->getSelectedProduct() . ' For a total price of: ';
if ($order->getPerson() === 'female') {
    echo ($order->getProductData()[$selectProduct][1] * $order->getAmount()) * 0.8 . PHP_EOL;
} else {
    echo $order->getProductData()[$selectProduct][1] * $order->getAmount() . PHP_EOL;
}

echo 'Left in store: ' . PHP_EOL;

foreach ($shop->products()->all() as ['product' => $product, 'amount' => $amount]) {
    if ($product->sellable()->name() === $order->getSelectedProduct()) {
        echo $product->sellable()->name() . ' -> price: ' . $product->price() . ' in store ( ' . ($amount - $order->getAmount()) . ' )' . PHP_EOL;
    } else {
        echo $product->sellable()->name() . ' -> price: ' . $product->price() . ' in store ( ' . $amount . ' )' . PHP_EOL;
    }
}












