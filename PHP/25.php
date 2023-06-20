<?php
// Associative Array - associate the user defined key

// numeric array
$arr = array("raj", "A", 12);
// echo $arr[0];

// associative array
$std = array("name" => "raj", "sec" => "A", "class" => 12, "marks" => 300);
// echo $std['name'];
// echo $std['sec'];
// echo $std['class'];

// print "Hello $std[name]";

// print "Hello " . $std['name'];

// wrong
// for ($i = 0; $i <= 2; $i++) {
//     echo $std[$i];
// }

// right
foreach ($std as $val) {
    echo $val . "<br>";
}

foreach ($std as $key => $val) {
    echo $key . "-" . $val . "<br>";
}
