<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "10"
//Author - K.Pokkers

echo 'Geometry Calculator' . PHP_EOL;
echo '1. Calculate the Area of a Circle' . PHP_EOL;
echo '2. Calculate the Area of a Rectangle' . PHP_EOL;
echo '3. Calculate the Area of a Triangle' . PHP_EOL;
echo '4. Quit' . PHP_EOL;
echo '--------------------------------' . PHP_EOL;

class geometry
{
    static function circle(int $radius)
    {
        if ($radius > 0) {
            return round((pi() * $radius * 2), 2);
        } else {
            return false;
        }
    }

    static function rectangle(int $width, int $lenght)
    {
        if ($width > 0 && $lenght > 0) {
            return $width * $lenght;
        } else {
            return false;
        }
    }

    static function triangle(int $base, int $lenght)
    {
        if ($base > 0 && $lenght > 0) {
            return $base * $lenght * 0.5;
        } else {
            return false;
        }
    }
}

function errorPositive(): string
{
    return 'False input! Positive number required';
}

function errorSymbol(): string
{
    return 'Please enter valid symbol - Number';
}

$mainChoice = readline('Enter your choice (1-4) : ');

while ($mainChoice < 1 || $mainChoice > 4 || filter_var($mainChoice, FILTER_VALIDATE_INT) === false) {
    echo 'Please enter valid symbol - NUMBER from 1 - 4' . PHP_EOL;
    $mainChoice = readline('Enter correct choice (1-4) : ');
}

if ($mainChoice == 1) {
    $radius = readline('Enter radius. ->');
    if (filter_var($radius, FILTER_VALIDATE_INT)) {
        if (geometry::circle($radius) === false) {
            echo errorPositive();
        } else {
            echo 'Circle area is ' . geometry::circle($radius);
        }
    } else {
        echo errorSymbol();
    }
} else if ($mainChoice == 2) {
    $width = readline('Enter width. ->');
    $lenght = readline('Enter lenght. ->');
    if (filter_var($width, FILTER_VALIDATE_INT) && filter_var($lenght, FILTER_VALIDATE_INT)) {
        if (geometry::rectangle($width, $lenght) === false) {
            echo errorPositive();
        } else {
            echo 'Rectangle area is ' . geometry::rectangle($width, $lenght);
        }
    } else {
        echo errorSymbol();
    }
} else if ($mainChoice == 3) {
    $base = readline('Enter base lenght. ->');
    $lenght = readline('Enter lenght. ->');
    if (filter_var($base, FILTER_VALIDATE_INT) && filter_var($lenght, FILTER_VALIDATE_INT)) {
        if (geometry::triangle($base, $lenght) === false) {
            echo errorPositive();
        } else {
            echo 'Triangle area is ' . geometry::triangle($base, $lenght);
        }
    } else {
        echo errorSymbol();
    }
} else if ($mainChoice == 4) {
    echo 'Programm is closed';
}


