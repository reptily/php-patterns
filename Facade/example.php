<?php

include "./Product.php";
include "./Category.php";
include "./Facade.php";

$Facade = new Facade(new Product, new Category);
echo $Facade->addNewProduct("apple") . "\n";