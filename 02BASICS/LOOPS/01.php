<?php

//Codelex trainig courses
//Section "loops" - exercise 01
//Author - K.Pokkers
$naturalNumbers = [];

for ($i = 1; $i <= 10; $i++) {
    $naturalNumbers[] = $i;
}

echo 'The first 10 natural numbers are: ';
foreach ($naturalNumbers as $number) {
    echo $number . '; ';
}
