<?php
require "display.class.php";

display::$age = 22;
echo display::$age;

$obj = new display("suman");
$obj->hi();
