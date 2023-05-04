<?php
// hw: 2 get Result in division/Grade as per class

$class = 7;

$eng = 30;
$math = 40;
$sci = 50;

$total = $eng + $math + $sci;
$avg = $total / 3;


if($class <= 6){
    if($avg <= 32){
        echo "D";
    }
    else if($avg <= 45){
        echo "C";
    }
    else if($avg <= 65){
        echo "B";
    }
    else if($avg <= 100){
        echo "A";
    }
    else{
        echo "wrong entry";
    }
}
else if($class <= 12){
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
}
else{
    echo "wrong Class";
}



// point: next topic LOOPS