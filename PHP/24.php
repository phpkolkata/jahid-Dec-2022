
<!-- <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul> -->


<?php

$weeks = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");

// print_r($weeks);

// print $weeks[0];
// print $weeks[1];
// print $weeks[2];
// print $weeks[3];
// print $weeks[4];
// print $weeks[5];
// print $weeks[6];

// print "<ul>";
// for ($i = 0; $i <= 6; $i++) {
//     print "<li>" . $weeks[$i] . "</li>";
// }
// print "</ul>";

print "<ul>";
foreach ($weeks as $w) {
    print "<li>" . $w . "</li>";
}
print "</ul>";

// <ul>
//     <li>sun</li>
//     <li>mon</li>
//     <li>tue</li>
//     <li>wed</li>
//     <li>thu</li>
//     <li>fri</li>
//     <li>sat</li>
// </ul>
