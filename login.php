<?php
if (isset($_POST['login'])){
	session_start();
	$_SESSION['email'] = htmlentities($_POST['email']);
	$_SESSION['password'] = htmlentities($_POST['password']);
	
	header('Location: index.php');

}




?>

