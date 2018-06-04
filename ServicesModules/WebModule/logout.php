<?php 
	session_start();
	session_destroy();
	session_start();
	$_SESSION["flash_message"] = "You have been logged out.";
	header('location:index.php');
?>