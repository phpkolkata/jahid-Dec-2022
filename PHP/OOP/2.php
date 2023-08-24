<?php

require "greet.class.php";

$obj1 = new greet();
$obj2 = new greet();

$obj1->name = "raj";
$obj1->hi();
$obj1->hello();

// $obj2->name = "suman";
$obj2->hi();
$obj2->hello();
