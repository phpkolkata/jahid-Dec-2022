<?php

$ab = array("test" => "a", "b");
$xy = array("x", "y");

$arr = array($ab, $xy);

print "<pre>";
print_r($arr);

echo $arr[0][0];
echo $arr[0]['test'];
