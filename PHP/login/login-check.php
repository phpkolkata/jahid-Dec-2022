<?php
session_start();
extract($_POST);

if ($user == "test@test.com" && $pass == "test") {
    $_SESSION['login'] = true;
    header("location:home1.php");
} else {
    header("location:index.php?msg=wrong user/pass");

}
