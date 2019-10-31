<?php

include "./Multiton.php";

$Car = Multiton::getInstance('Car');
$Moto = Multiton::getInstance('Moto');

$Car->setName("Ford");
echo $Car->getName() . "\n";

$Moto->setName("Yamaha");
echo $Moto->getName() . "\n";



$CarTest = Multiton::getInstance('Car');
$MotoTest = Multiton::getInstance('Moto');

echo $CarTest->getName() . "\n";
echo $MotoTest->getName() . "\n";
