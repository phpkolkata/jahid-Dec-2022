<?php

$x = "10abc";
$y = 20;
@$z = $x + $y; // @ to suppress the notice or warning

echo $z."<br>"; // 10+20 1020


// hw:

// Arithmetic operators - (+,-,/,%,*)
// Assignment operators - (=, +=, -=)
// Comparison operators - (==, <=, >=)
// Increment/Decrement operators - (++$x, --$x, $x++, $x--)
// Logical operators - (&&, ||, !)
// String operators - (., .=)

$x = 10;
// echo $x++;
echo ++$x;