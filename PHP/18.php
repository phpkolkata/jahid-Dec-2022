<?php
// Functions - set of code to reduce complexity and shorten the programm.
// user-defined & pre-defined

// 1. function name
// 2. function params/args
// 3. optional args/params
// 4. return / process
// 5. return type
//----------------------------------

// processed function
function hi(): void
{
    echo "hi";
}
hi();
//----------------------------------
// returned function
function hello(): string
{
    return "hello";
}
echo hello();
//----------------------------------

// params
function getCoffee($milk, $sugar, $cofee): int
{
    return $milk + $sugar + $cofee;
}
echo getCoffee(2, 6, 4);
//------------------------------------------------------

// why function?
// $options = 6;
// print "<select>";
// for ($i = 1; $i <= $options; $i++) {
//     echo "<option>Option $i</option>";
// }
// print "</select>";

function generateDropDown($options)
{
    print "<select>";
    for ($i = 1; $i <= $options; $i++) {
        echo "<option>Option $i</option>";
    }
    print "</select>";

}

generateDropDown(20);
generateDropDown(20);
generateDropDown(20);
generateDropDown(20);
generateDropDown(20);
generateDropDown(20);
generateDropDown(20);

//------------------------------------------------------

function add($v1, $v2): int
{
    $total = $v1 + $v2;
    return $total;
}

function sub($v1, $v2): int
{
    $total = $v1 - $v2;
    return $total;
}

function mul($v1, $v2): int
{
    $total = $v1 * $v2;
    return $total;
}

function div($v1, $v2): int
{
    $total = $v1 / $v2;
    return $total;
}

$total = add(30, 55);
echo $total;

//----------------------------------------

// Function with multiple operation using params
function calc($v1, $v2, $act)
{
    if ($act == "+") {
        return $v1 + $v2;
    } else if ($act == "-") {
        return $v1 - $v2;
    } else if ($act == "*") {
        return $v1 * $v2;
    } else if ($act == "/") {
        return $v1 / $v2;
    }
}

echo calc(30, 40, "sub"); //+,add  -,sub  *,mul  /,div
// echo calc(30, 40);  // default nature to add

// Function with default parameter
function calc2($v1, $v2, $act = "+")
{
    if ($act == "+") {
        return $v1 + $v2;
    } else if ($act == "-") {
        return $v1 - $v2;
    } else if ($act == "*") {
        return $v1 * $v2;
    } else if ($act == "/") {
        return $v1 / $v2;
    }
}

echo calc(30, 40, "sub"); //+,add  -,sub  *,mul  /,div
