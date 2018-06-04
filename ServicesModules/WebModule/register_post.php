<?php
	include  'db_connect.php';
	session_start();
	echo "<pre>";
	print_r($_POST);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST["confirm_password"];
	$fullname = $_POST["fullname"];
	if($password != $confirm_password)
	{
		$_SESSION["flash_message"] = "Confirm Password did not match.";
		header('location:register.php');
	}


	$password = password_hash($password, PASSWORD_DEFAULT);
	$userType = "Requestor";


	$request_query = "INSERT INTO users (username, password, fullName, userType)
	VALUES ('$username', '$password', '$fullName', '$userType')";

	$request_result = mysqli_query($conn, $request_query);
	$_SESSION["flash_message"] = "Account has been registered.";
	header('location:index.php');
?>