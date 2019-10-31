<?php

include "./DecoratorInterface.php";
include "./Decorator.php";
include "./Disk.php";

$Decorator = new Decorator;

$Disk = new Disk($Decorator);

echo $Disk->operation() . "\n";