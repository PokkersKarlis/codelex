<?php

//Codelex trainig courses
//Section 05 - exercise 06
//Author - K.Pokkers

$data = [
  3,
  5,
  10,
  13.1,
  'string'
];

function doubleData(int $number):int
{
    return $number * 2;
}

for ($i = 0; $i < count($data); $i++){
    $number = $data[$i];

    if (is_int($number)) {
        echo doubleData($data[$i]). PHP_EOL;
    }
}
