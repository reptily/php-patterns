<?php

include "./ActiveRecords.php";
include "./Repository.php";

$DB = new ActiveRecords("posts");
$Post = new Repository(1, $DB);

echo $Post->getName() ." \n";