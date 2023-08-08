<?php
if (isset($_REQUEST['msg'])) {
    print "<div style='color:red'>$_REQUEST[msg]</div>";
}

?>

<form action="login-check.php" method="post">
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="pass"><br>
<button>Login</button>
</form>
