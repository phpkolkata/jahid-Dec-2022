<?php

// age category
// 1-2 = infant
// 3-4 = toddler
// 5-12 = kid
// 13-19 = teenager
// 20-40 = young
// 41 above = mature 

$age = 105;
echo "Age = $age<br>";

if($age >= 1 && $age <= 2){
    echo "You are Infant";
}

 if($age >= 3 && $age <= 4){
    echo "You are Toddler";
}

 if($age >= 5 && $age <= 12){
    echo "You are Kid";
}

 if($age >= 13 && $age <= 19){
    echo "You are Teenager";
}

 if($age >= 20 && $age <= 40){
    echo "You are Young";
}

 if($age >= 41 && $age <= 100){
    echo "You are Mature";
}

 if($age > 100){
    echo "wrong entry";
}

