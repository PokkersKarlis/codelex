<?php
require_once 'WarehouseInterface.php';
require_once 'Shop.php';
require_once 'warehousesCollections/FlowerCentralCollection.php';
require_once 'warehousesCollections/GardenerCollection.php';
require_once 'warehousesCollections/HippyPlaceCollection.php';
require_once 'Flower.php';


$flowerCentral = new FlowerCentralCollection();

$flowerCentral->addFlowers([
    new Flower('rose', 200, 100),
    new Flower('lilly', 50, 200),
    new Flower('tulip', 100, 20),

]);

$gardener = new GardenerCollection();

$gardener->addFlowers([
    new Flower('rose', 300, 100),
    new Flower('lilly', 150, 200),
    new Flower('tulip', 1100, 20),

]);

$hippyPlace = new HippyPlaceCollection();

$hippyPlace->addFlowers([
    new Flower('rose', 1200, 100),
    new Flower('lilly', 10, 200),
    new Flower('tulip', 100, 20),

]);

//var_dump($gardener->getFlowers());
$shop = new Shop();
$shop->getAvailableFlowers(new FlowerCentralCollection(), new GardenerCollection(), new HippyPlaceCollection());


