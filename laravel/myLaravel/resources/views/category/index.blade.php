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

<a href='/logout' class='btn btn-danger float-end'>Logout</a>


<div class='mx-auto w-50 mt-5 mb-1 clearfix'>
<a href='/category/create' class='btn btn-primary float-end'>Add Category</a>
</div>


<table border='1' width='300' class='table table-striped w-50 mx-auto shadow'>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>is_active</th>
    <th>Option</th>
    </tr>


@foreach($db as $row)
   <tr>

        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->is_active }}</td>
        <td>
        <a href='del-cat.php?id=' class='btn btn-outline-danger'> <i class='bi bi-trash'></i> </a>
        <a href='edit-cat.php?id=' class='btn btn-outline-success'> <i class='bi bi-pencil-square'></i> </a>
        </td>

   </tr>
@endforeach

</table>


<div class='mx-auto w-50  mb-1 clearfix'>
{{ $db->links() }}
</

</body>
</html>

