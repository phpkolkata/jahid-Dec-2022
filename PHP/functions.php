<?php
function getTotal($m1, $m2, $m3)
{
    return $m1 + $m2 + $m3;
}
function getAvg($total, $numberOfSub)
{
    return $total / $numberOfSub;
}
function getResult($class, $avg)
{
    if ($class <= 6) {
        if ($avg <= 32) {
            return "D";
        } else if ($avg <= 45) {
            return "C";
        } else if ($avg <= 65) {
            return "B";
        } else if ($avg <= 100) {
            return "A";
        } else {
            return "wrong entry";
        }
    } else if ($class <= 12) {
        if ($avg <= 32) {
            return "fail";
        } else if ($avg <= 45) {
            return "3rd";
        } else if ($avg <= 65) {
            return "2nd";
        } else if ($avg <= 100) {
            return "1st";
        } else {
            return "wrong entry";
        }
    } else {
        return "wrong Class";
    }

}
