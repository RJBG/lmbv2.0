<?php  
	session_start();
	session_unset($_SESSION['NAME']);
	session_destroy($_SESSION['NAME']);
	header("location: ../index.php");
?>