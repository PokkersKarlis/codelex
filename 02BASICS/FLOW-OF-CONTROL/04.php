<?php

//Codelex trainig courses
//Section "flow-of-control" - exercise 04
//Author - K.Pokkers

class Day
{
    private int $number;

    public function choice(): void
    {
        do {
            $number = filter_var(readline('Enter day number: '), FILTER_VALIDATE_INT);
        } while ($number === false);
        $this->number = $number;
    }

    public function showThoseFckingDaysWithSwitch(): string
    {
        $this->choice();
        switch ($this->number) {
            case 0:
                return 'Sunday';
                break;
            case 1:
                return 'Monday';
                break;
            case 2:
                return 'Tuesday';
                break;
            case 3:
                return 'Wednesday';
                break;
            case 4:
                return 'Thursday';
                break;
            case 5:
                return 'Friday';
                break;
            case 6:
                return 'Saturday';
                break;
            default:
                return 'Not a valid day';
        }
    }

    public function showThoseFckingDaysWithif(): string
    {
        $this->choice();
        if ($this->number != 0) {
            if ($this->number != 1) {
                if ($this->number != 2) {
                    if ($this->number != 3) {
                        if ($this->number != 4) {
                            if ($this->number != 5) {
                                if ($this->number != 6) {
                                    return 'Not a valid day';
                                }
                                return 'Saturday';
                            }
                            return 'Friday';
                        }
                        return 'Thursday';
                    }
                    return 'Wednesday';
                }
                return 'Tuesday';
            }
            return 'Monday';
        }
        return 'Sunday';
    }
}

$day = new Day();
echo $day->showThoseFckingDaysWithSwitch();
echo PHP_EOL;
echo $day->showThoseFckingDaysWithif();
