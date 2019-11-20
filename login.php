<?php
if (isset($_POST['signup_page'])){
	session_start();
	$_SESSION['email'] = htmlentities($_POST['email']);
	$_SESSION['password'] = htmlentities($_POST['password']);
	
	header('Location: index.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action = "index.php" method = "post">
        Email:<br>
        <input type="email" name="email"><br>
        <br>
        Password:<br>
        <input type="password" name="password"><br>
        <br>
        <br>
        <input type="Submit" value="Login" name="login">
    </form>
</body>
</html>