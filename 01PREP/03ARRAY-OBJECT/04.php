<?php

//Codelex trainig courses
//Section 03 - exercise 04
//Author - K.Pokkers

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

foreach ($items[0][1] as $key => $information) {
    echo $information. ' ';
}