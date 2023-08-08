<?php
session_start();
extract($_POST);

require "../db/connection.php";

// if ($user == "test@test.com" && $pass == "test") {
//     $_SESSION['login'] = true;
//     header("location:home1.php");
// } else {
//     header("location:index.php?msg=wrong user/pass");

// }

$sql = "select * from admin where `email`='$email' and `pass`='$pass'";
$res = mysqli_query($con, $sql);
$tot = mysqli_num_rows($res);

if ($tot == 1) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['login_id'] = $row['id'];
    header("location:home1.php");
} else {
    header("location:index.php?msg=wrong user/pass");

}
