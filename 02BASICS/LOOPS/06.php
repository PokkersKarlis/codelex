<?php

//Codelex trainig courses
//Section "loops" - exercise 06
//Author - K.Pokkers

class AsciiFigure
{
    private const SIZE = 5;

    public function getCustomNumber(): void
    {
        $number = filter_var(readline('Please enter your number'), FILTER_VALIDATE_INT);
        while ($number != true) {
            $number = filter_var(readline('Please enter valid number'), FILTER_VALIDATE_INT);
        }
        $this->drawFigure($number);

    }

    // Last changed $this->size tu $number as of modification - custom number input
    public function drawFigure(int $number): void
    {
        //Starting point for first line is need for print 16 for 5 lines/ so line size needs to be even ->
        //corrected to 16 -> added constant value and left one option to be managed by input
        $firstLine = ($number - 1) * (self::SIZE - 1); // $firstLine = 16 if input 5 lines
        for ($i = 0; $i < $number; $i++) {
            //Must get  16 at the start and next steps -4 from $firstLine
            /*first step $i = 0; $firstLine 16 // if every step gives me -4 so i can use $size - 4
                    corrected: with $firstLine - $i * ($this->size - 1) // loose by the line is increasing
            as increasing line input. constant value fixes this and now decreases by 4 every line. */
            echo str_repeat('/', $firstLine - $i * (self::SIZE - 1));
            //first line is zero and every next is + 8
            echo str_repeat('*', $i * (self::SIZE - 1) * 2);
            echo str_repeat('\\', $firstLine - $i * (self::SIZE - 1));
            echo PHP_EOL;
        }
    }
}

$figure = new AsciiFigure();
$figure->getCustomNumber();
