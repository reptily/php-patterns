<?php

include "./Prototype.php";
include "./Car.php";

$Prototype = new Prototype();

$Car1 = new Car();
$Car1->name = "Ford";

echo $Car1->name . "\n";

$Car2 = $Prototype->getClone($Car1);

echo $Car2->name  . "\n";
