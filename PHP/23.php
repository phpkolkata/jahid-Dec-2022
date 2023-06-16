<?php

function dd($arr, $die = 1)
{
    print "<pre>";
    print_r($arr);
    if ($die) {
        die;
    }

}

// method 1 - using array function
$arr = array("raj", "12", 33, true);

// echo $arr[2];
// echo $arr[3];

// method 2 - directly with index
$arr2[0] = "raj";
$arr2[1] = 12;

// echo $arr2[0];

// method 3 - direct without index
$arr3[] = "raj"; // 0
$arr3[] = 12; // 1
$arr3[100] = "suman"; //100
$arr3[] = 42; //101

// echo $arr3[1];

// debuging purpose
// print "<pre>";
// print_r($arr2);

dd($arr3, 0);

echo "hello";
