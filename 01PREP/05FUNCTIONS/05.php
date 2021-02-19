<?php

//Codelex trainig courses
//Section 05 - exercise 05
//Author - K.Pokkers

$fruits = [
    [
        'name' => 'Orange',
        'weight' => 1

    ],
    [
        'name' => 'Watermelon',
        'weight' => 11

    ],
    [
        'name' => 'Apples',
        'weight' => 15

    ],
    [
        'name' => 'Grapes',
        'weight' => 3

    ]

];

function checkWeight(int $fruitWeight): int
{
    $costs = [
        10 => 2
    ];

    foreach ($costs as $weight => $price) {
        if ($fruitWeight >= $weight) {
            return $price;
        }

    }
    return 1;
}

foreach ($fruits as $fruit) {
    echo $fruit['name'] . ' shipping costs ' . checkWeight($fruit['weight']) . PHP_EOL;
}
