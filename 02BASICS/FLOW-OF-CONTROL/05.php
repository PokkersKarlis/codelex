<?php

//Codelex trainig courses
//Section "flow-of-control" - exercise 05
//Author - K.Pokkers


class PhoneKeyPad

{

    private array $wordArray;

    public function getWord(): void
    {
        $word = filter_var(readline('Enter word: '), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $word = strtolower($word);
        $this->wordArray = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function pushNumbersWithSwitch(): array
    {
        $key = [];
        $this->getWord();
        foreach ($this->wordArray as $numbers) {
            switch ($numbers) {
                case 'c':
                    array_push($key, 2);
                case 'b':
                    array_push($key, 2);
                case 'a':
                    array_push($key, 2);
                    break;
                case 'f':
                    array_push($key, 3);
                case 'e':
                    array_push($key, 3);
                case 'd':
                    array_push($key, 3);
                    break;
                case 'i':
                    array_push($key, 4);
                case 'h':
                    array_push($key, 4);
                case 'g':
                    array_push($key, 4);
                    break;
                case 'l':
                    array_push($key, 5);
                case 'k':
                    array_push($key, 5);
                case 'j':
                    array_push($key, 5);
                    break;
                case 'o':
                    array_push($key, 6);
                case 'n':
                    array_push($key, 6);
                case 'm':
                    array_push($key, 6);
                    break;
                case 's':
                    array_push($key, 7);
                case 'r':
                    array_push($key, 7);
                case 'q':
                    array_push($key, 7);
                case 'p':
                    array_push($key, 7);
                    break;
                case 'v':
                    array_push($key, 8);
                case 'u':
                    array_push($key, 8);
                case 't':
                    array_push($key, 8);
                    break;
                case 'z':
                    array_push($key, 9);
                case 'y':
                    array_push($key, 9);
                case 'x':
                    array_push($key, 9);
                case 'w':
                    array_push($key, 9);
                    break;
                default:
                    echo $numbers;
            }
        }
        return $key;
    }
}

$keyPad = new PhoneKeyPad();
foreach ($keyPad->pushNumbersWithSwitch() as $number) {
    echo $number;
}
echo PHP_EOL;


