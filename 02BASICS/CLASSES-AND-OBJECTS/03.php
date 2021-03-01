<?php
declare(strict_types=1);
//Codelex trainig courses
//Section "classes-and-objects" - exercise 03
//Author - K.Pokkers


class FuelGauge
{
    private int $fuelTank;

    public function __construct($fuelTank)
    {
        $this->fuelTank = $fuelTank;
    }

    public function showFuel(): int
    {
        return $this->fuelTank;
    }

    public function increaseFuel(): void
    {
        if ($this->fuelTank < 70) {
            $this->fuelTank = $this->fuelTank + 1;
        }
    }

    public function decreaseFuel(): void
    {
        if ($this->fuelTank > 0) {
            $this->fuelTank = $this->fuelTank - 1;
        }
    }
}

class Odometer
{
    private int $mileage;

    public function __construct($mileage)
    {
        $this->mileage = $mileage;
    }

    public function showMileage(): int
    {
        return $this->mileage;
    }

    public function setMileage():void
    {
        $this->mileage = $this->mileage + 1;
        if ($this->mileage > 999999) {
            $this->mileage = 0;
        }
    }
}

$car = new FuelGauge(0);
$odometer = new Odometer(0);


echo $car->decreaseFuel() . PHP_EOL;
do {
    usleep(1000);
    $car->increaseFuel() . PHP_EOL;
    echo $car->showFuel() . ' l' . PHP_EOL;
} while ($car->showFuel() < 70);

echo $odometer->showMileage() . ' km' . PHP_EOL;

do {
    sleep(1);
    $odometer->setMileage();
    if ($odometer->showMileage() % 10 === 0) {
        $car->decreaseFuel();
    }
    echo $odometer->showMileage() . ' km' . PHP_EOL;
    echo $car->showFuel() . ' l' . PHP_EOL;
} while ($car->showFuel() >= 0);


