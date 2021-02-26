<?php

//Codelex trainig courses
//Section "loops" - exercise 08
//Author - K.Pokkers

class NumberSquare
{

    public function printNumbers()
    {
        $minNumber = filter_var(readline('Min? '), FILTER_VALIDATE_INT);
        while ($minNumber != true || $minNumber < 1) {
            $minNumber = filter_var(readline('Please enter valid number '), FILTER_VALIDATE_INT);
        }

        $maxNumber = filter_var(readline('Max? '), FILTER_VALIDATE_INT);
        while ($maxNumber != true || $maxNumber <= $minNumber) {
            $minNumber = filter_var(readline('Please enter valid number '), FILTER_VALIDATE_INT);
        }

        $numberLine = range($minNumber, $maxNumber);
        //Need to operate an array and echo lines equal array items
        for ($i = 0; $i < $maxNumber; $i++) {
            //checking with foreach -> foreach success(getting lines from min to max equal maxNumber)
            //looping and shifting
            foreach ($numberLine as $line) {
                echo $line;
            }
            echo PHP_EOL;
            $shiftedLine = array_shift($numberLine);
            array_push($numberLine, $shiftedLine);
        }
    }

}

$square = new NumberSquare();
$square->printNumbers();
