<?php
// write or append a file
$fp = fopen("1.txt", "w"); //w - write, r - read, a - append
fwrite($fp, "hello india");
fclose($fp);
