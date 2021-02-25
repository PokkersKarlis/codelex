<?php

//Codelex trainig courses
//Section "arrays" - exercise 04
//Author - K.Pokkers

$range = range(1, 100);

shuffle($range);

for ($i = 0; $i < 10; $i++){
    $firstArray[] = $range[$i];
}

$secondArray = $firstArray;

function updateArray(&$array, $value): void
{
    array_pop($array);
    array_push($array, $value);
}

updateArray($firstArray, -7);

echo 'Array 1: ';
foreach ($firstArray as $first){
    echo $first. ', ';
}
echo PHP_EOL;
echo 'Array 2: ';
foreach ($secondArray as $second){
    echo $second. ', ';
}


