<?php

include "./Singleton.php";

Singleton::getInstance();

Singleton::setName("Foo");
Singleton::setTime(time());

echo Singleton::getName() . "\n";
echo Singleton::getTime() . "\n";

echo "\n\n";

Singleton::setName("Bar");

echo Singleton::getName() . "\n";
echo Singleton::getTime() . "\n";
