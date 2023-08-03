<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create,Read,Update,Delete</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<?php
require "connection.php";
// Search
$where = "";
if (isset($_REQUEST['srch'])) {
    $where = "WHERE `name` like '%$_REQUEST[srch]%'";
}

// Count Record
$sql = "select * from category $where";
$res = mysqli_query($con, $sql);
$tot = mysqli_num_rows($res); //counts number of rows in $res

$limit = 4;
$pages = ceil($tot / $limit);
// echo $pages;
$start = 0;
if (isset($_REQUEST['p'])) {
    $start = ($_REQUEST['p'] - 1) * $limit;
}

// Main Query
$sql = "select * from category $where LIMIT $start,$limit";
$res = mysqli_query($con, $sql);

print $sql;

if (isset($_REQUEST['msg'])) {
    $msg = strtoupper($_REQUEST['msg']);
    print "<div class='alert alert-success'>$msg</div>";
}

print "<div class='mx-auto w-50 mt-5 mb-1 clearfix'>
<form action='category.php' method='get'>
<input type='search' class='float-start' name='srch'>
<button class='btn btn-warning float-start'>Search</button>
</form>

<a href='add-category.php' class='btn btn-primary float-end'>Add Category</a>
</div>";

print "
<table border='1' width='300' class='table table-striped w-50 mx-auto shadow'>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>is_active</th>
    <th>Option</th>
    </tr>
";

while ($row = mysqli_fetch_assoc($res)) {
    print "<tr>";
    print "
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td>
        <a href='del-cat.php?id=$row[id]' class='btn btn-outline-danger'> <i class='bi bi-trash'></i> </a>
        <a href='edit-cat.php?id=$row[id]' class='btn btn-outline-success'> <i class='bi bi-pencil-square'></i> </a>
        </td>
    ";
    print "</tr>";
}

print "</table>";

?>
<div class="mx-auto w-50">
  <ul class="pagination">
    <?php
for ($i = 1; $i <= $pages; $i++) {
    print "<li class='page-item'><a class='page-link' href='?p=$i'>
        $i
    </a></li>";
}
?>
  </ul>
</div>

</body>
</html>

