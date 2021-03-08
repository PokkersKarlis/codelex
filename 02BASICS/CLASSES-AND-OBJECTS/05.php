<?php declare(strict_types=1);
//Codelex trainig courses
//Section "classes-and-objects" - exercise 05
//Author - K.Pokkers

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function displayDate(): string
    {
        return $this->getMonth() . '/' . $this->getDay() . '/' . $this->getYear();
    }
}

$date = new Date((int)date('m'), (int)date('d'), (int)date('Y'));


echo $date->displayDate();

