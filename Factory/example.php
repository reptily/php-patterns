<?php

include "./ProductInterface.php";
include "./Product.php";
include "./Moto.php";
include "./Car.php";
include "./Factory.php";

$Factory = new Factory;

$Car = $Factory->create('Car');
$Car->setName("Ford");
$Car->setDescription("Muscle car");

$Moto = $Factory->create('Moto');
$Moto->setName("Yamaha");
$Moto->setDescription("Sport Bike");

echo $Car->getName() . ' ' . $Car->getDescription();
echo "\n\n\n";

echo $Moto->getName() . ' ' . $Moto->getDescription();
echo "\n\n\n";