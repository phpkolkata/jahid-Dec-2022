<?php
// style 1
$p22 = array("name" => "raj", "age" => 22); //$v1
$a22 = array("class" => 4, "sec" => "A"); //$v1
$roll22 = array("personal" => $p22, "academic" => $a22); //$v

$p35 = array("name" => "suman", "age" => 33); //$v1
$a35 = array("class" => 4, "sec" => "A"); //$v1
$roll35 = array("personal" => $p35, "academic" => $a35); //$v

$std = array("22" => $roll22, "35" => $roll35);

foreach ($std as $k => $v) {
    echo "<h1>Roll - $k</h1>";
    foreach ($v as $k1 => $v1) {
        echo "<b>$k1:</b><br>";
        foreach ($v1 as $k2 => $v2) {
            echo "$k2 - $v2<br>";
        }
    }
}
