<?php
// hw: loop to bring ul li listing as per $options (try all 3 loops)

$options = 15;

print "<ol>";
for ($i = 1; $i <= $options; $i++) {
    echo "<li>Option $i</li>";
}
print "</ol>";

print "<select>";
for ($i = 1; $i <= $options; $i++) {
    echo "<option>Option $i</option>";
}
print "</select>";

print "<table border='1'>";
for ($i = 1; $i <= $options; $i++) {
    echo "<tr>
    <td>Option $i</td>
    </tr>";
}
print "</table>";

?>

<!-- <select>
    <option>Option 1</option>
    <option>Option 1</option>
    <option>Option 1</option>
    <option>Option 1</option>
</select> -->
