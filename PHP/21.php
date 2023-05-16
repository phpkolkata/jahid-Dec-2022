<?php
// procedural (procegeral) programming

require "functions.php";

$class = 5;
$eng = 30;
$math = 40;
$sci = 50;

$total = getTotal($eng, $math, $sci);
$avg = getAvg($total, 3);
$result = getResult($class, $avg);

echo $result;

// hw:

// 10.php - getAgeCategory();
// 12.php - getTotal,getAvg,getResult
// 16.php - getOddnumber($limit), getEvenNumber(100)
// 17.php - getHtml($total, $style)  - getHtml(5,"li")
