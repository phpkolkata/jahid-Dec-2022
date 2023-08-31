<?php
// require "connection.php";
// extract($_POST);
$sql = "INSERT INTO `category` (`id`, `name`, `is_active`) VALUES (NULL, '$nm', '$is_active')";
// $res = mysqli_query($con, $sql) or die(mysqli_error($con));

require "db.class.php";

// $db->connect(); // db connection
// $db->insert($sql);
$db->execute($sql);
