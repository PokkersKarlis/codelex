<?php

class HippyPlaceCollection implements WarehouseInterface

{
    private array $flowers = [];

    public function setFlowers(Flower $flower): void
    {
        $this->flowers[] = $flower;
    }

    public function addFlowers(array $flowers)
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