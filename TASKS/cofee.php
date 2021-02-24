<?php

//Codelex trainig courses
//Section "tasks" - exercise "cofee"
//Author - K.Pokkers

//Kafijas automāts
//nauda = 1 -10, 2 - 5, utt...
//Pieņem visas naudas līdz 200
//Latte, Melna kafija  180 , balta kafija -220


$money = [
    1 => 5,
    2 => 2,
    5 => 1,
    10 => 4,
    20 => 2,
    50 => 3,
    100 => 1,
    200 => 1
];

$latte = new stdClass();
$latte->name = 'Latte';
$latte->price = 220;

$darkCoffee = new stdClass();
$darkCoffee->name = 'Dark coffee';
$darkCoffee->price = 185;

$cacao = new stdClass();
$cacao->name = 'Cacao';
$cacao->price = 205;

$coffee = [
    $latte,
    $darkCoffee,
    $cacao
];

$seperator = '-------------------------------------';

echo 'You have money of nominals: EurCents:' . PHP_EOL;
foreach ($money as $moneys => $value) {
    $nominals[] = $moneys * $value;
    echo 'Cents ' . $moneys . ' x ' . $value . ' pcs. | ' . PHP_EOL;
}

echo 'With total amount = ' . array_sum($nominals) / 100 . ' €' . PHP_EOL;

echo $seperator . PHP_EOL;
echo 'Please choose your drink -> ' . PHP_EOL;


$selectedProduct = null;

while ($selectedProduct == null) {

    foreach ($coffee as $number => $product) {
        echo '[' . $number . '] ' . $product->name . ' | Price: €' . $product->price / 100 . PHP_EOL;
    }

    $coffeeMachine = readline('Please enter your choice...');
    if (isset($coffee[$coffeeMachine]) /*&& filter_var($coffeeMachine, FILTER_VALIDATE_INT)*/) {
        $selectedProduct = $coffee[$coffeeMachine];
        echo $seperator . PHP_EOL;
        echo 'You have selected - ' . $selectedProduct->name . ' €' . $selectedProduct->price / 100 . PHP_EOL;
        echo $seperator . PHP_EOL;
    } else {
        echo $seperator . PHP_EOL;
    }
}

$machinePocket = [];
while (array_sum($machinePocket) < $selectedProduct->price) {
    $moneySlot = readline('Please enter coins... ');
    while (!array_key_exists($moneySlot, $money)) {
        $moneySlot = readline('Insert a valid coin: ');
    }


    while ($money[$moneySlot] < 1) {
        $moneySlot = readline('You are out of this coin type');
    }

    array_push($machinePocket, $moneySlot);
    $money[$moneySlot]--;

    echo $seperator . PHP_EOL;
    echo 'Balance: ' . array_sum($machinePocket) . PHP_EOL;
    echo 'Price : ' . $selectedProduct->price . PHP_EOL;
    echo $seperator . PHP_EOL;

    foreach ($money as $moneys => $value) {
        $nominals[] = $moneys * $value;
        echo 'Cents ' . $moneys . ' x ' . $value . ' pcs. | ' . PHP_EOL;
    }
}

echo $seperator . PHP_EOL;
echo 'In progress' . PHP_EOL;
$loading = [];

while (count($loading) < 7) {

    sleep(1);
    array_push($loading, '*');

    foreach ($loading as $symbol) {
        echo $symbol;
    }

}
echo PHP_EOL;
$change = array_sum($machinePocket) - $selectedProduct->price;

if ($change > 0) {
    echo 'Your change is : €' . $change / 100 . PHP_EOL;
    foreach (array_reverse($money, true) as $key => $amount) {
        for ($i = 0; $i < $amount; $i++) {
            if ($key <= $change) {
                echo 'Returned coin: ' . $key . PHP_EOL;
                $change -= $key;
                $money[$key]++;
            }
        }
    }
    echo $seperator . PHP_EOL;
    foreach ($money as $moneys => $value) {
        $nominals[] = $moneys * $value;
        echo 'Cents ' . $moneys . ' x ' . $value . ' pcs. | ' . PHP_EOL;
    }
    echo $seperator . PHP_EOL;
    echo 'Enyoy your drink and have a nice day!';
} else {
    echo 'Enyoy your drink and have a nice day!';
}



