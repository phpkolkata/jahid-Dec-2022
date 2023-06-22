<?php
// \style 1
$p22 = array("name" => "raj", "age" => 22);
$a22 = array("class" => 4, "sec" => "A");
$roll22 = array("personal" => $p22, "academic" => $a22);

$p35 = array("name" => "suman", "age" => 33);
$a35 = array("class" => 4, "sec" => "A");
$roll35 = array("personal" => $p35, "academic" => $a35);

$std = array("22" => $roll22, "35" => $roll35);

print "<pre>";
print_r($std);

echo $std[22]['personal']['name'];

// ---------------------------------------------------------
// style 2

$std = array(
    "22" => array(
        "personal" => array(
            "name" => "raj",
            "age" => 4),
        "academic" => array(
            "class" => "5",
            "sec" => "A")),
    "35" => array(
        "personal" => array(
            "name" =>
            "suman", "age" => 5),
        "academic" => array(
            "class" => "5",
            "sec" => "B")),
);

print "<pre>";
print_r($std);
