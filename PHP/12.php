<?php

// hw: 1 get Result in division
$eng = 30;
$math = 40;
$sci = 50;

$total = $eng + $math + $sci;
$avg = $total / 3;

if($avg <= 32){
    echo "fail";
}
else if($avg <= 45){
    echo "3rd";
}
else if($avg <= 65){
    echo "2nd";
}
else if($avg <= 100){
    echo "1st";
}
else{
    echo "wrong entry";
}