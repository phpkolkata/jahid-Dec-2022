<?php
// procedural (procegeral) programming

require "functions.php";

$class = 5;

$eng = 33;
$math = 33;
$sci = 33;
$hin = 34;

$geo = 47;

$total = getTotal($eng, $math, $sci);
$avg = getAvg($total, 3);
$result = getResult($class, $avg);

echo $result;

// hw:
// 10.php - getAgeCategory();
// 12.php - getTotal,getAvg,getResult
// 16.php - getOddnumber($limit), getEvenNumber(100)
// 17.php - getHtml($total, $style)  - getHtml(5,"li")

// getOdd
echo getNumbers(20, "odd");
echo getNumbers(10, "even");

echo getHtml(20, "select");
