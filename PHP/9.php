<?php

// age category
// 1-2 = infant
// 3-4 = toddler
// 5-12 = kid
// 13-19 = teenager
// 20-40 = young
// 41 above = mature 

$age = 78999;
echo "Age = $age<br>";

if($age <= 2){
    echo "You are Infant";
}
else if($age <= 4){
    echo "You are Toddler";
}
else if($age <= 12){
    echo "You are Kid";
}
else if($age <= 19){
    echo "You are Teenager";
}
else if($age <= 40){
    echo "You are Young";
}
else if($age <= 100){
    echo "You are Mature";
}
else{
    echo "Wrong Entry";
}