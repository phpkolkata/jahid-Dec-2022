<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>

<?php
$age = 22;

// TRADITIONAL PHP STYLE
// ---------------------
echo "Age = $age<br>";

if ($age <= 2) {
    echo "You are Infant";
} else if ($age <= 4) {
    echo "You are Toddler";
} else if ($age <= 12) {
    echo "You are Kid";
} else if ($age <= 19) {
    echo "You are Teenager";
} else if ($age <= 40) {
    echo "You are Young";
} else if ($age <= 100) {
    echo "You are Mature";
} else {
    echo "Wrong Entry";
}
?>

<!-- LARAVEL STYLE -->

Age = {{ $age }} <br>
@if($age <= 2)
    You are Infant
@elseif($age <= 4)
    You are Toddler
@elseif($age <= 12)
    You are Kid
@elseif($age <= 19)
    You are Teenager
@elseif($age <= 40)
    You are Young
@elseif($age <= 100)
    You are Mature
@else
    wrong entry
@endif




</body>
</html>
