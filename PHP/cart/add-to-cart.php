<?php
session_start();
// session_destroy();
// die;
extract($_POST);

// echo $qnty;
// echo $pid;

// $_SESSION['cart'][$pid] = $_SESSION['cart'][$pid] + $qnty;

if (isset($_SESSION['cart'][$pid])) {
    $_SESSION['cart'][$pid] += $qnty;
} else {
    $_SESSION['cart'][$pid] = $qnty;
}

// print "<pre>";
// print_r($_SESSION['cart']);

header("location:index.php");
