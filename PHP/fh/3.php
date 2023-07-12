<?php
// read a file
$fp = fopen("1.txt", "r");
$str = "";
while (!feof($fp)) {
    $str .= fgets($fp);
    // $str = $str . fgets($fp);
    // echo fgets($fp) . "<br>";
    // echo fgetc($fp) . "<br>";
}

fclose($fp);

echo $str;
