<?php

class DogTest
{
    private array $dogs = [];

    public function setDog(Dog $dog): void
    {
        $this->dogs[] = $dog;
    }

    public function setDogs(array $dogs): void
    {
        foreach ($dogs as $dog) {
            $this->setDog($dog);
        }
    }

    /**
     * @return array
     */
    public function getDogs(): array
    {
        return $this->dogs;
    }
}