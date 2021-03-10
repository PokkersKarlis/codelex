<?php

class GardenerCollection implements WarehouseInterface

{
    private array $flowers = [];


    public function setFlowers(Flower $singleFlower): void
    {
        $this->flowers[] = $singleFlower;
    }

    public function addFlowers(array $flowers):void
    {
        foreach ($flowers as $singleFlower){
            $this->setFlowers($singleFlower);
        }
    }

    public function getFlowers(): array
    {
        return $this->flowers;
    }
}