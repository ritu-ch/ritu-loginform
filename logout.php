<?php
	// session_start();
	// unset($_SESSION['email']);
 
	// if(session_destroy())
	// {
	// 	header("Location: index.php");
	// }
	session_start();
	session_destroy();
	header("location:login.php");
?>

