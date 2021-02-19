<?php

//Codelex trainig courses
//Section 03 - exercise 05
//Author - K.Pokkers

$personsData = [
    'Kārlis' => [
        'surname' => 'Pokkers',
        'age' => 34,
        'birthday' => '14. decembris'
    ],
    'Sandra' => [
        'surname' => 'Pokkere',
        'age' => 30,
        'birthday' => 'Kaut kad maijā'
    ],
    'Jānis' => [
        'surname' => 'Pokkers',
        'age' => 9,
        'birthday' => '24. aprīlis'
    ],
    'Elza' => [
        'surname' => 'Pokkere',
        'age' => 5,
        'birthday' => '1. janvāris'
    ]
];

foreach ($personsData as $name => $data) {
    echo 'Name: ' . $name . PHP_EOL;
    foreach ($data as $info => $key){
        echo $info. ': '.$key. PHP_EOL;
    }
}