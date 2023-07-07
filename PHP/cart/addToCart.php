<?php
session_start();
extract($_GET);

// print "$pid - $op";

if($op == "add"){
    $_SESSION['cart'][$pid] +=1;
}
elseif($op == "del"){
    $_SESSION['cart'][$pid] -=1;
}
elseif($op == "rem"){
    unset($_SESSION['cart'][$pid]);
}


header("location:cart.php");