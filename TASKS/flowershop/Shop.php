<?php

class Shop

{
    private array $flowers =[];

    /**
     * @return array
     */
    public function getFlowers(): array
    {
        return $this->flowers;
    }

    public function getAvailableFlowers(WarehouseInterface $flowerCentral, WarehouseInterface $gardener, WarehouseInterface $hippyPlace)
    {
        var_dump($gardener->getFlowers());

    }
}