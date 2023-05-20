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

function getNumbers($limit, $type)
{

    $numbers = "";
    if ($type == "odd") {
        $numbers = "<h1>Odd Numbers under $limit</h1>";
        for ($i = 1; $i <= $limit; $i++) {
            if (($i % 2) != 0) {
                $numbers .= "$i<br>";
            }
        }
    } else {
        $numbers = "<h1>Even Numbers under $limit</h1>";
        for ($i = 1; $i <= $limit; $i++) {
            if (($i % 2) == 0) {
                $numbers .= "$i<br>";
            }
        }
    }
    return $numbers;
}

function getHtml($limit, $type)
{
    $html = "";
    if ($type == "table") {
        $html = "<table border='1'>";
        for ($i = 1; $i <= $limit; $i++) {
            $html .= "<tr><td>$i</td></tr>";
        }
        $html .= "</table>";
    } else if ($type == "select") {
        $html = "<select>";
        for ($i = 1; $i <= $limit; $i++) {
            $html .= "<option>$i</option>";
        }
        $html .= "</select>";
    }

    return $html;
}
