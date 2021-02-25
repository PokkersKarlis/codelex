<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "08"
//Author - K.Pokkers

class Employees
{
    const basePay = 8;
    const extraPay = 1.5;
    const baseHours = 40;
    const extraHours = 60;

    public $name;
    public $employeeBasePay;
    public $workHours;

    public function __construct(string $name, int $employeeBasePay, int $workHours)
    {
        $this->name = $name;
        $this->employeeBasePay = $employeeBasePay;
        $this->workHours = $workHours;
    }

    public function checkBasePayAndHours(): bool
    {
        return $this->employeeBasePay >= self::basePay && $this->workHours <= self::extraHours;
    }

    public function salary(): float
    {
        if ($this->workHours <= self::baseHours) {
            return $this->workHours * self::basePay;
        } else {
            return (self::baseHours * self::basePay) + (self::extraPay * ($this->workHours - self::baseHours));
        }
    }

}

$employees = [
    new Employees('Kārlis', 7.50, 35),
    new Employees('Sandra', 8.20, 47),
    new Employees('Kaimiņš', 10.00, 73)
];

foreach ($employees as $employee) {
    if ($employee->checkBasePayAndHours() !== true) {
        echo 'Error! Salary calculation for ' . $employee->name . ' is forbidden!' . PHP_EOL;
    } else {
        echo 'Salary for ' . $employee->name . ' is $' . $employee->salary() . PHP_EOL;
    }
}
