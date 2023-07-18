<?php
// host,user(root),pass(""),db
$con = mysqli_connect("localhost", "asif", "asif", "mobile_store");

if (!$con) {
    die("db connection error");
}

$sql = "select * from category";
$res = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    echo "<pre>";
    print_r($row);
    print "----------------------";
}
