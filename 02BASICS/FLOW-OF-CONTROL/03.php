<?php

//Codelex trainig courses
//Section "flow-of-control" - exercise 03
//Author - K.Pokkers

class Counter
{
    public function count(): int
    {
        do {
            $number = filter_var((int)readline('Enter positive number: '), FILTER_VALIDATE_INT);
        } while ($number === false || $number < 0);

        return strlen($number);
    }
}

$counter = new Counter();
echo 'Number have ' . $counter->count() . ' digits';