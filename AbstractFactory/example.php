<?php

include "./FactoryInterface.php";
include "./FactoryMailTest.php";
include "./MailInterface.php";
include "./MailTestInterface.php";
include "./FactoryMail.php";
include "./AbstractFactory.php";
include "./Mail.php";
include "./MailTest.php";

$Factory = (new AbstractFactory())->getFactory("FactoryMail");
$Mail = $Factory->create("Mail");

echo $Mail->send("first@gmail.com") . "\n";



$FactoryTest = (new AbstractFactory())->getFactory("FactoryMailTest");
$MailTest = $FactoryTest->create("MailTest");

echo $MailTest->test() . "\n";
