<?php

include "./Post.php";
include "./Observer.php";

$Post = new Post("HelloWord");

$personOne = new Observer("One");
$personTwo = new Observer("Two");

$Post->attach($personOne);
$Post->attach($personTwo);

$Post->newContent("Open Web");

echo "\n\n";