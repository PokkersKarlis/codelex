<?php

//Codelex trainig courses
//Section 05 - exercise 07
//Author - K.Pokkers


//buyer class

$buyer = new stdClass();
$buyer->name = 'Kārlis';
$buyer->licenses = [
    'p',
    's'
];
$buyer->cash = 1000;

//Store stock

$guns = new stdClass();
$guns->data = [
    'pistol' => [
        'license' => 'p',
        'price' => 200
    ],

    'smg' => [
        'license' => 's',
        'price' => 1500
    ],

    'rifle' => [
        'license' => 'r',
        'price' => 2500
    ]
];

//Get buyer licences and chek for ability to buy weapons
foreach ($buyer->licenses as $licence) {
    foreach ($guns->data as $name => $values) {
        if (in_array($licence, $values, true) && $buyer->cash >= $values['price']) {
            echo $buyer->name . ' can buy ' . $name . ' in total of $' . $values['price'] . PHP_EOL;
        }
    }
    echo $buyer->name . ' cant buy ' . $name . ' in total of $' . $values['price'] . PHP_EOL;
}


