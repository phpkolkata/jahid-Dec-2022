<?php

print "POST<br>";
print_r($_POST);

print "<br>GET<br>";
print_r($_GET);

print "<br>REQUEST<br>";
print_r($_REQUEST);

extract($_REQUEST);

echo $nm . $age;
