<div style="color:red">
<?php
if (isset($_REQUEST['msg'])) {
    echo $_REQUEST['msg'];
}
?>
</div>

<form action="35.php" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="nm"><br>
    Image: <input type="file" name="im"><br>

    <button>Upload</button>
</form>
