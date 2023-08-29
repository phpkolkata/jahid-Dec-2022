<?php

require "greet2.class.php";

$obj1 = new greet2();
$obj2 = new greet2();

// $obj1->name = "raj";
// $obj1->hi();
// $obj1->hello();
greet::$age = 50;
$obj1->greetAll();
$obj2->greetAll();
