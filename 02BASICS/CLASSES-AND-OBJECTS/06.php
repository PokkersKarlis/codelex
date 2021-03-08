<?php declare(strict_types=1);
//Codelex trainig courses
//Section "classes-and-objects" - exercise 06
//Author - K.Pokkers

class EnergyDrink

{
    private const SURVEYED = 12467;
    private const PURCHASED_ENERGY_DRINKS = 0.14;
    private const PREFER_CITRUS_DRINKS = 0.64;


    public function getSurveyed(): int
    {
        return self::SURVEYED;
    }

    public function calculateEnergyDrinkers(): float
    {
        return round(((self::SURVEYED * 100) * (self::PURCHASED_ENERGY_DRINKS * 100)) / 10000, 0);
    }

    public function calculatePreferCitrusDrinks(): float
    {
        return round((($this->calculateEnergyDrinkers() * 100) * (self::PREFER_CITRUS_DRINKS * 100)) / 10000, 0);
    }
}

$energyDrinks = new EnergyDrink();

echo 'Total number of people surveyed '. $energyDrinks->getSurveyed() . PHP_EOL;
echo 'Approximately '. $energyDrinks->calculateEnergyDrinkers(). ' bought at least one energy drink'. PHP_EOL;
echo $energyDrinks->calculatePreferCitrusDrinks(). ' of those '. $energyDrinks->getSurveyed(). ' prefer citrus flavored energy drinks.'. PHP_EOL;

