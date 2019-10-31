<?php

include "./Config.php";
include "./DB.php";

$Config = new Config("localhost", 3000);
$DB = new DB($Config);

echo $DB->Connect() . "\n";