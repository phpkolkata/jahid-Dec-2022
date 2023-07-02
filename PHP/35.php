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

copy($tmp_name, "uploads/$name");

print "<img src='uploads/$name'> ";
