<?php
print "POST<br>";
print_r($_POST);

print "<br>GET<br>";
print_r($_GET);

print "<br>REQUEST<br>";
print_r($_REQUEST);

print "<br>FILES<br><pre>";
print_r($_FILES);

extract($_FILES['im']);
// [name] => MYSQL-SLAVE.txt
// [full_path] => MYSQL-SLAVE.txt
// [type] => text/plain
// [tmp_name] => /tmp/phpWoVtu1
// [error] => 0
// [size] => 693

$id = rand(1, 1000);
$name = $id . "-" . $name;
$folder = "uploads/";
$fullpath = $folder . $name;

if ($error == 0) {
    if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/gif" || $type == "image/png") {
        copy($tmp_name, $fullpath);
    } else {
        header("location:34.php?msg=wrong format");
        die("wrong format");
    }
} else {
    header("location:34.php?msg=error uploading file");
    die("error uploading file");
}

// print "<img src='uploads/$name'> ";
