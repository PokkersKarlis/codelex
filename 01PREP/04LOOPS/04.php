<?php

//Codelex trainig courses
//Section 04 - exercise 04
//Author - K.Pokkers

$dataCollection = [
    9,
    7,
    13,
    15,
    12,
    1,
    8
];

foreach ($dataCollection as $data) {
    while($data % 3 == 0){
        echo $data. PHP_EOL;
        break;
    }
}